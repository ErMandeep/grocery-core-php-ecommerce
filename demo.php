 <?php 


session_start();



include('admin/config/db.php');
include('admin/include/functions.php');

foreach($_SESSION["shopping_cart"] as $keys=> $values) {
	echo "<pre>";
    echo "$keys";

    print_r($values);

	echo "<pre>";

	// echo $_SESSION["shopping_cart"][$keys]['product_id'];


	// echo $values["product_id"];
?>




<?php } ?>


<form method="get">
	
<input type="submit" name="news" value="submit">

</form>

   <?php

   if(isset($_GET['news'])){

// $amount = $_GET['amt'];
// $currency = $_GET['cc'];
// $transaction = $_GET['tx'];
// $status = $_GET['st'];
$total = 0;
$item_quantity = 0;



foreach ($_SESSION["shopping_cart"] as $keys=> $values) {

    if($values > 0 ) {

    $product_id = $values['product_id'];
    $product_name = $values['product_name'];
    $product_price = $values['product_price'];
    $product_quantity = $values['product_quantity'];
    $featured_img = $values['featured_img'];

    $totalprice = $values["product_quantity"] * $values["product_price"];

    // $total_price = $values['total_price'];

$send_order = query("INSERT INTO reports (product_id, product_name, product_price, product_quantity, total_price, featured_img ) VALUES('{$product_id}', '{$product_name}','{$product_price}','{$product_quantity}', '{$totalprice}' ,'{$featured_img}')");
// $last_id =last_id();
confirm($send_order);
?>


<?php
}
}
}
?>

   

   





	<input type="text" name="values[$index][product_id]">
	<br>

<input type="text" name="values[$index][product_name]" value="<?php echo $_SESSION["shopping_cart"][$keys]['product_id']; ?>"> 	<br>
<input type="text" name="values[$index][product_price]">	<br>
<input type="text" name="values[$index][product_quantity]">	<br>
<input type="text" name="values[$index][featured_img]">	<br>	




<ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
              <div class="step-title"> <span class="number">1</span>




              	 <li id="opc-shipping" class="section">
              <div class="step-title"> <span class="number">2</span>
                <h3 class="one_page_heading"> Shipping Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>