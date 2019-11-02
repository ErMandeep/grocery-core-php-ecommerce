<?php 
session_start();

foreach($_SESSION["shopping_cart"] as $keys=> $values) {
	echo "<pre>";
    echo "$keys";

    print_r($values);

	echo "<pre>";

	// echo $_SESSION["shopping_cart"][$keys]['product_id'];


	echo $values["product_id"];

}


	if(isset($_POST['update_cart'])){


      // $is_available = 0;
      foreach($_SESSION["shopping_cart"] as $keys => $values)
      {
        // if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
        // {
          $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_POST["product_quantity"];
        // }
      }



    foreach($_POST['item'] AS $key=>$value)
    {
    $qty = $_POST["quantity"][$key];
    $_SESSION["quantity"][$key] =  $qty;

    $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_POST["product_quantity"];    
    $_SESSION["incart"][$select]["item_quantity"]= $_SESSION["quantity"][$key];
}





}

 ?>

  <input type='hidden' name='quantity[1]' id='quantity[1]'>  

  <input type="hidden" name="itq[<?= $select ?>]" value="<?php echo $val["item_quantity"]; ?>"/>