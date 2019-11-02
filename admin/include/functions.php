<?php 



$upload_directory = "uploads";

// helper functions


function last_id(){

global $connection;

return mysqli_insert_id($connection);


}


function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}


function redirect($location){

return header("Location: $location ");


}



// function redirect($location, $sec=0)
// {
//     if (!headers_sent())
//     {
//         header( "refresh: $sec;url=$location" ); 
//     }
//     elseif (headers_sent())
//     {
//         echo '<noscript>';
//         echo '<meta http-equiv="refresh" content="'.$sec.';url='.$location.'" />';
//         echo '</noscript>';
//     }
//     else
//     {
//         echo '<script type="text/javascript">';
//         echo 'window.location.href="'.$location.'";';
//         echo '</script>';
//     }
// }



function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}


function confirm($result){

global $connection;

if(!$result) {

die("QUERY FAILED " . mysqli_error($connection));


	}


}


function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);


}


/****************************FRONT END FUNCTIONS************************/


// get products 


function get_products() {


$query = query(" SELECT * FROM products");
confirm($query);

$rows = mysqli_num_rows($query); // Get total of mumber of rows from the database


if(isset($_GET['page'])){ //get page from URL if its there

    $page = preg_replace('#[^0-9]#', '', $_GET['page']);//filter everything but numbers



} else{// If the page url variable is not present force it to be number 1

    $page = 1;

}


$perPage = 6; // Items per page here 

$lastPage = ceil($rows / $perPage); // Get the value of the last page


// Be sure URL variable $page(page number) is no lower than page 1 and no higher than $lastpage

if($page < 1){ // If it is less than 1

    $page = 1; // force if to be 1

}elseif($page > $lastPage){ // if it is greater than $lastpage

    $page = $lastPage; // force it to be $lastpage's value

}



$middleNumbers = ''; // Initialize this variable

// This creates the numbers to click in between the next and back buttons


$sub1 = $page - 1;
$sub2 = $page - 2;
$add1 = $page + 1;
$add2 = $page + 2;



if($page == 1){

      $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';

      $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';

} elseif ($page == $lastPage) {
    
      $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
      $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';

}elseif ($page > 2 && $page < ($lastPage -1)) {

      $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2. '</a></li>';

      $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';

      $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';

         $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';

      $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2. '</a></li>';

     


} elseif($page > 1 && $page < $lastPage){

     $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page= '.$sub1.'">' .$sub1. '</a></li>';

     $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
 
     $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';


     


}


// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query


$limit = 'LIMIT ' . ($page-1) * $perPage . ',' . $perPage;




// $query2 is what we will use to to display products with out $limit variable

$query2 = query(" SELECT * FROM products $limit");
confirm($query2);


$outputPagination = ""; // Initialize the pagination output variable


// if($lastPage != 1){

//    echo "Page $page of $lastPage";


// }


  // If we are not on page one we place the back link

if($page != 1){


    $prev  = $page - 1;

    $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Back</a></li>';
}

 // Lets append all our links to this variable that we can use this output pagination

$outputPagination .= $middleNumbers;


// If we are not on the very last page we the place the next link

if($page != $lastPage){


    $next = $page + 1;

    $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Next</a></li>';

}


// Doen with pagination



// Remember we use query 2 below :)

while($row = fetch_array($query2)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img style="height:90px" src="../resources/{$product_image}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
             <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Add to cart</a>
        </div>


       
    </div>
</div>

DELIMETER;

echo $product;


        }


       echo "<div style='clear:both' class='text-center'><ul class='pagination'>{$outputPagination}</ul></div>";


}


function get_categories(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>


DELIMETER;

echo $categories_links;

     }



}








function get_products_in_cat_page() {


$query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


		}


}




// edit product fetch data



function edit_product() {


$query = query(" SELECT * FROM products WHERE id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


        }


}





function get_products_in_shop_page() {


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


        }


}



function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username are wrong");
redirect("login.php");


} else {

$_SESSION['username'] = $username;
redirect("admin");

         }



    }



}



function login_admin(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);

$query = query("SELECT * FROM admin WHERE email = '{$username}' AND password = '{$password }'");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username are wrong");
header('Location: login.php');
// redirect("login.php");


} else {


while($row = $query->fetch_assoc()){

$_SESSION['email'] = $row['email'];
$_SESSION['id'] = $row['id'];
$login_id = $_SESSION['id'];

$_SESSION['username'] = $username;
// header("location: product-list.php");
// redirect("admin");
}

         }



    }



}



function send_message() {

    if(isset($_POST['submit'])){ 

        $to          = "someEmailaddress@gmail.com";
        $from_name   =   $_POST['name'];
        $subject     =   $_POST['subject'];
        $email       =   $_POST['email'];
        $message     =   $_POST['message'];


        $headers = "From: {$from_name} {$email}";


        $result = mail($to, $subject, $message,$headers);

        if(!$result) {

            set_message("Sorry we could not send your message");
            redirect("contact.php");
        } else {

            set_message("Your Message has been sent");
            redirect("contact.php");
        }




    }




}



/****************************BACK END FUNCTIONS************************/


function product_list(){

$query = query("SELECT * FROM Products ORDER BY id");
confirm($query);

while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
<td>{$row['product_name']}</td>
<!-- <td>#85457891</td> -->
<td>
    <img src="images/{$row['featured_img']}" alt="mac_mouse" width="80">
</td>
<td>{$row['product_category_id']}</td>
 <td>{$row['product_quantity']}</td> 
<!-- <td>01-10-2016</td> -->
<td>
  <!--  <span class="label label-default font-weight-100">Failed</span>  -->
</td>
<td><center>
 <a href="edit-products.php?id={$row['id']}" class="btn btn-primary btn-xs">Update </a> 

 <button type="button" name="delete" class="btn btn-danger btn-xs delete" id="{$row['id']}" >Delete</button>
</center>
</td>
</tr>





DELIMETER;

echo $orders;



    }



}




/************************ Admin Products Page ********************/

function display_image($picture) {

global $upload_directory;

return $upload_directory  . DS . $picture;



}





function get_products_in_admin(){


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$category = show_product_category_title($row['product_category_id']);

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>

            <td>

             <a href="index.php?edit_product&id={$row['product_id']}"><p>{$row['product_title']}</p></a>

            <div>

            <img width='100' src="http://placehold.it/300/300" alt="">

            </div>




            </td>


            <td>{$category}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
             <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }





}


function show_product_category_title($product_category_id){


$category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
confirm($category_query);

while($category_row = fetch_array($category_query)) {

return $category_row['cat_title'];

}



}






/***************************Add Products in admin********************/







function add_product() {


if(isset($_POST['publish'])) {
global $connection;

$product_name          = escape_string($_POST['product_name']);
$product_category_id    = escape_string($_POST['product_category_id']);
$price                  = escape_string($_POST['price']);
$description            = escape_string($_POST['description']);
$market_price             = escape_string($_POST['market_price']);
$product_quantity       = escape_string($_POST['product_quantity']);

$img1 = pathinfo($_FILES["featured_img"]["name"], PATHINFO_EXTENSION);
$name1 = rand(1,5000).".".$img1;
move_uploaded_file($_FILES["featured_img"]["tmp_name"],"./images/$name1");


$query = query("INSERT INTO products(product_name, product_category_id, price, description, market_price ,featured_img, product_quantity) VALUES('{$product_name}', '{$product_category_id}', '{$price}', '{$description}', '{$market_price}' ,'{$name1}', '{$product_quantity}' )");
$last_id = last_id();
confirm($query);


   $id_guests = mysqli_insert_id($connection);



// image upload query
  if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 // for($count = 0; $count <= 2; $count++)
 {
  
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));

  $query1 = "INSERT INTO images (productID, image) VALUES ('$id_guests', '$image_file')";
  $result= mysqli_query($connection,$query1);

 }

}






if($query){
    header('Location: product-list.php');

}

        }


}

function show_categories_add_product_page(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}



/***************************updating product code ***********************/

function update_product() {


    if(isset($_POST['update'])) {
global $connection;

$product_name           = escape_string($_POST['product_name']);
$product_category_id    = escape_string($_POST['product_category_id']);
$price                  = escape_string($_POST['price']);
$description            = escape_string($_POST['description']);
$product_quantity       = escape_string($_POST['product_quantity']);
$market_price       = escape_string($_POST['market_price']);

       $add_client_query = "UPDATE products SET ";
        $add_client_query .="product_name = '{$product_name}',";       
        $add_client_query .="product_category_id = '{$product_category_id}',";       
        $add_client_query .="description = '{$description}',";       
        $add_client_query .="market_price = '{$market_price}',";       
        $add_client_query .="product_quantity = '{$product_quantity}',";       
        $add_client_query .="price = '{$price}'";       
        $add_client_query .= "WHERE id = " .escape_string($_GET['id']). "";      
        
        $clients_result = mysqli_query($connection, $add_client_query);


confirm($clients_result);

        if($_FILES['featured_img']['name'] != ""){    

        $img1 = pathinfo($_FILES["featured_img"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["featured_img"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE products SET featured_img = '$name1' WHERE id=" .escape_string($_GET['id']). "";
        $update_img = mysqli_query($connection, $imagesql);

        }
        echo $name1;

if($update_img || $clients_result){
    header('Location: product-list.php');
}


        }


}



// image upload query

function product_image_update(){
$productID = $_GET['id'];


if(isset($_POST['updateimg'])){

    $query2 = query(" SELECT * FROM images WHERE productID = " . escape_string($_GET['id']) . " ");

$image_count = mysqli_num_rows($query2); 

global $connection;
if($image_count == 3){

        echo "<script type='text/javascript'>alert('Maximum 3 images can be uploaded');</script>";
      // header ("Location: edit-products.php?id=" . escape_string($_GET['id']) . "&error=1");

}else{

  if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
  $query = "INSERT INTO images (productID, image) VALUES ('$productID', '$image_file')";
  $result= mysqli_query($connection,$query);
 }
}
if($result){
  header ("Location: edit-products.php?id=" . escape_string($_GET['id']) . "");
}
}
}


}

// image upload query



/*************************Categories in admin ********************/


function show_categories_in_admin() {


$category_query = query("SELECT * FROM categories");
confirm($category_query);


while($row = fetch_array($category_query)) {

$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


$category = <<<DELIMETER


<tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $category;



    }



}


function add_category() {

if(isset($_POST['add_category'])) {
$cat_title = escape_string($_POST['cat_title']);

if(empty($cat_title) || $cat_title == " ") {

echo "<p class='bg-danger'>THIS CANNOT BE EMPTY</p>";


} else {


$insert_cat = query("INSERT INTO category(cat_title) VALUES('{$cat_title}') ");
confirm($insert_cat);
set_message("Category Created");




    }


    }




}




 /************************admin users***********************/



function display_users() {


$category_query = query("SELECT * FROM users");
confirm($category_query);


while($row = fetch_array($category_query)) {

$user_id = $row['user_id'];
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];

$user = <<<DELIMETER


<tr>
    <td>{$user_id}</td>
    <td>{$username}</td>
     <td>{$email}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

echo $user;



    }



}


function add_user() {


if(isset($_POST['add_user'])) {


$username   = escape_string($_POST['username']);
$email      = escape_string($_POST['email']);
$password   = escape_string($_POST['password']);
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$query = query("INSERT INTO users(username,email,password) VALUES('{$username}','{$email}','{$password}')");
confirm($query);

set_message("USER CREATED");

redirect("index.php?users");



}



}





function get_reports(){


$query = query(" SELECT * FROM reports");
confirm($query);

while($row = fetch_array($query)) {


$report = <<<DELIMETER

        <tr>
             <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_title']}
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $report;


        }





}




/******************Slides Functions *******************/

function add_slides() {


if(isset($_POST['add_slide'])) {


$slide_title        = escape_string($_POST['slide_title']);
$slide_image        = escape_string($_FILES['file']['name']);
$slide_image_loc    = escape_string($_FILES['file']['tmp_name']);


if(empty($slide_title) || empty($slide_image)) {

echo "<p class='bg-danger'>This field cannot be empty</p>";


} else {



move_uploaded_file($slide_image_loc, UPLOAD_DIRECTORY . DS . $slide_image);

$query = query("INSERT INTO slides(slide_title, slide_image) VALUES('{$slide_title}', '{$slide_image}')");
confirm($query);
set_message("Slide Added");
redirect("index.php?slides");





                }


        }


}



function get_current_slide_in_admin(){

$query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
confirm($query);

while($row = fetch_array($query)) {

$slide_image = display_image($row['slide_image']);

$slide_active_admin = <<<DELIMETER



    <img class="img-responsive" src="../../resources/{$slide_image}" alt="">



DELIMETER;

echo $slide_active_admin;


    }



}




function get_active_slide() {

$query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
confirm($query);



while($row = fetch_array($query)) {

$slide_image = display_image($row['slide_image']);

$slide_active = <<<DELIMETER


 <div class="item active">
    <img class="slide-image" src="../resources/{$slide_image}" alt="">
</div>


DELIMETER;

echo $slide_active;


    }

}



function get_slides() {

$query = query("SELECT * FROM slides");
confirm($query);



while($row = fetch_array($query)) {

$slide_image = display_image($row['slide_image']);

$slides = <<<DELIMETER


 <div class="item">
    <img class="slide-image" src="../resources/{$slide_image}" alt="">
</div>


DELIMETER;

echo $slides;




}





}


function get_slide_thumbnails(){


$query = query("SELECT * FROM slides ORDER BY slide_id ASC ");
confirm($query);

while($row = fetch_array($query)) {

$slide_image = display_image($row['slide_image']);

$slide_thumb_admin = <<<DELIMETER


<div class="col-xs-6 col-md-3 image_container">
    
    <a href="index.php?delete_slide_id={$row['slide_id']}">
        
         <img  class="img-responsive slide_image" src="../../resources/{$slide_image}" alt="">


    </a>

    <div class="caption">

    <p>{$row['slide_title']}</p>

    </div>


</div>


    



DELIMETER;

echo $slide_thumb_admin;


    }






}



// front end product fetch data

function best_seller_products(){

$query = query("SELECT * FROM Products ORDER BY id");
confirm($query);

while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id={$row['id']}"> <img src="admin/images/{$row['featured_img']}" class="img-responsive" alt="product-image" /> </a>


                      <div class="hover_fly">

                         <a class="quick-view" href="product_detail.php?id={$row['id']}">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> 
                         </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="#"></a>   {$row['product_name']} </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>        
                            </div>                                     
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs.  {$row['price']}   </span> </p>
                           <p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rs.  {$row['market_price']} </span> </p> 
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>





DELIMETER;

echo $orders;



    }



}





function featured_products(){

$query = query("SELECT * FROM Products ORDER BY id");
confirm($query);

while($row = fetch_array($query)) {


$orders = <<<DELIMETER


          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id={$row['id']}"> <img src="admin/images/{$row['featured_img']}" class="img-responsive" alt="a" /> </a>

                
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id={$row['id']}"> {$row['product_name']} </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rs.  {$row['price']}   </span> </p>
                      
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <a href="product_detail.php?id={$row['id']}"> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>






DELIMETER;

echo $orders;



    }



}





function product_list_1(){

$query = query("SELECT * FROM Products ORDER BY id");
confirm($query);

while($row = fetch_array($query)) {


$orders = <<<DELIMETER


              <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id={$row['id']}"> <img src="admin/images/{$row['featured_img']}" class="img-responsive" alt="a" /> </a>
                      
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id={$row['id']}"> {$row['product_name']} </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs.  {$row['price']}  </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                       <a href="product_detail.php?id={$row['id']}"> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>






DELIMETER;

echo $orders;



    }



}








function product_list_2(){

$query = query("SELECT * FROM Products ORDER BY id");
confirm($query);

while($row = fetch_array($query)) {


$qty = $row['product_quantity'];

$orders = <<<DELIMETER


              <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id={$row['id']}"> <img src="admin/images/{$row['featured_img']}" class="img-responsive" alt="a" /> </a>
                      
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id={$row['id']}"> {$row['product_name']} </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs.  {$row['price']}  </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">

            <input type="hidden" name="quantity" id="quantity{$row['id']}" value="1">
            <input type="hidden" name="hidden_name" id="name{$row['id']}" value="{$row['product_name']}" /> 
            <input type="hidden" name="hidden_price" id="price{$row['id']}" value="{$row['price']}" />
            <input type="hidden" name="featured_img" id="featured_img{$row['id']}" value="{$row['featured_img']}" />


<a href="product_detail.php?id={$row['id']}"> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>

                    
                        
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>






DELIMETER;

echo $orders;



    }



}

// front end product fetch data




// register user
function register(){
    global $connection;

if(isset($_POST['signup']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        // $clientID = $row['clientID'];
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, md5($_POST['password']));
        // $username = mysqli_real_escape_string($connection, $_POST['username']);
        // $phone = mysqli_real_escape_string($connection,$_POST['phone']);
        // $vendor_purpose = mysqli_real_escape_string($connection,$_POST['vendor_purpose']);
        $user_activation_code = md5(rand());
        // $confirm_password = $_POST['confirm_password'];

        // $options = ['cost' => 12, ];

        // $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);


        $query = "SELECT * FROM user where email = '". $_POST["email"] . "'";

        $result = mysqli_query($connection, $query);

        if($result-> num_rows == 0 )      
         {
        // Add new user to database
        $register_query = "INSERT INTO user (email, password, status, activatecode)";
        
        $register_query .= "VALUES ('{$email}', '{$password}', 'not active', '{$user_activation_code}')";
        
        
        $result = mysqli_query($connection, $register_query);
        if($result){
          echo "<b>"."Your Acccount created successfully"."</b>"."<br>";
        }

        confirm($result);


        $id_guests = mysqli_insert_id($connection);

        // Add shhiping address to database
        $register_query2 = "INSERT INTO shipping_address (client_id)";
        
        $register_query2 .= "VALUES ('{$id_guests}')";
        
        
        $result2 = mysqli_query($connection, $register_query2);        


         if(isset($result))
  {


        $actual_link = "http://localhost/fouritue/"."activate.php?id=" . $user_activation_code;
        $toEmail = $_POST["email"];
        $subject = "User Registration Activation Email";
        $content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";



   $base_url = "http://localhost/tutorial/email-address-verification-script-using-php/";
   $mail_body = '<p>test</p>';
   require 'class/class.phpmailer.php';
   $mail = new PHPMailer;
   $mail->IsSMTP();        //Sets Mailer to send message using SMTP
   $mail->Host = 'mail.wedkings.in';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
   $mail->Port = '587';        //Sets the default SMTP server port
   $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
   $mail->Username = 'admin@wedkings.in';     //Sets SMTP username
   $mail->Password = '45rude88mud';     //Sets SMTP password
   $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
   $mail->setFrom('admin@wedkings.in', 'Wedkings ');  //Sets the From email address for the message
   $mail->FromName = 'Wedkings';     //Sets the From name of the message
   $mail->addAddress($_POST["email"]);   //Adds a "To" address   
   $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
   $mail->IsHTML(true);       //Sets message type to HTML    
   $mail->Subject = $subject;   //Sets the Subject of the message
   $mail->Body = $content;       //An HTML or plain text message body
   if($mail->Send())        //Send an Email. Return true on success or false on error
   {
    // $message = '<label class="text-success">Register Done, Please check your mail.</label>';
    echo "<b>"."Register Done, Please check your mail."."</b>"."<br>";
   }
  }





        } else {
  
          while($row =mysqli_fetch_assoc($result)){
          // $usernamedb = $row['username'];
          $emaildb = $row['email'];
          // $phonedb = $row['phone'];
        }

         // if($username == $usernamedb){
         //  echo "<b>"."This Username already in use."."</b>"."<br>";
         // }
         if ($email == $emaildb) {
           // echo "<b>"."This Email already in use."."</b>"."<br>";
           echo '<script> alert("This Email already in use.");</script>';
         }
        // if ($phone == $phonedb) {
        //   echo "<b>"."This Mobile Number already in use."."</b>"."<br>";
        // }


               
        }


        
        
        }
        }

// register user

// Submit review

       function submitreview(){

        $productID = $_GET['id'];
        if(isset($_SESSION['id'])){
        $clientID = $_SESSION['id'];
}

       if(isset($_POST['submitreview'])){


        if($clientID){

          $quality_rating           = escape_string($_POST['quality_rating']);
          $value_rating             = escape_string($_POST['value_rating']);
          $price_rating             = escape_string($_POST['price_rating']);
          $nickname                 = escape_string($_POST['nickname']);
          $summary                  = escape_string($_POST['summary']);
          $review                   = escape_string($_POST['review']);
          $total                    = $quality_rating + $value_rating + $price_rating;
          $totalrow                 = 3;
          $overall_rating           = $total/$totalrow;
          $exact                    = round($overall_rating);

          $query = query("INSERT INTO rating(quality_rating, value_rating, price_rating, nickname, summary, review, productID, clientID, overall_rating) VALUES('{$quality_rating}', '{$value_rating}', '{$price_rating}', '{$nickname}', '{$summary}', '{$review}', '{$productID}', '{$clientID}', '{$exact}')");
          $last_id = last_id();
          confirm($query);

                    }else{
                      header('Location: login.php');
                    }
            }        
                }


            
// Submit review


                // Get reveiws
function getreviews() {


$query = query(" SELECT * FROM rating WHERE productID = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$dtt = $row['date'];
$dt = new DateTime($dtt);
$dt->format('Y-m-d');

$product = <<<DELIMETER


                            <li>
                              <table class="ratings-table">
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating{$row['value_rating']}"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating{$row['quality_rating']}"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating{$row['price_rating']}"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="#">{$row['summary']}</a></h6>
                                <small>Review by <span>{$row['nickname']} </span>on $dt </small>
                                <div class="review-txt"> {$row['review']}</div>
                              </div>
                            </li>

DELIMETER;

echo $product;


        }


}



            // hour ago function

            function time_elapsed_string($datetime, $full = false) {
            global $connection;
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);

            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;

            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }

            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }



// genrate coupon codes

        function coupongenrate(){
         global $connection;
         if(isset($_POST['create'])){
 

$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$res = "";
for ($i = 0; $i < 10; $i++) {
    $res .= $chars[mt_rand(0, strlen($chars)-1)];
}
  
  $amount = $_POST['amount'];

  $query = "INSERT INTO coupon (amount, codes) VALUES('{$amount}','{$res}')";

  $result = mysqli_query($connection, $query);
  
  if($result){
    header('Location: coupon.php');
  }

}
}





// based on your search show products

function show_product_on_search() {

$query = query("SELECT * FROM Products ORDER BY id LIMIT 8");
confirm($query);

while($row = fetch_array($query)) {


$product = <<<DELIMETER

 <li class="item col-md-3 col-sm-4 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id={$row['id']}"> <img alt="a" class="img-responsive" src="admin/images/{$row['featured_img']}"> </a>
                    <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="product_detail.php?id={$row['id']}" title="Add to cart">
                      <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                      </a> 
                    
                    </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id={$row['id']}"> {$row['product_name']} </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:60%"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price" id="product-price-902"> Rs.  {$row['price']}  </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price" id="old-price-902"> Rs.  {$row['market_price']}  </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>

DELIMETER;

echo $product;


        }


}

 ?>

