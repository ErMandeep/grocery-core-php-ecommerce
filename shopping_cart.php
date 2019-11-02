<?php include('include/header.php'); ?>
<title>Cart</title>


<body>
<div class="page"> 
  <!-- Header -->
<?php include('include/cart.php'); ?>
  <!-- end header --> 
<?php $discount= 0; ?>
    <!-- end breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="index.php" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="#" title="Go to Home Page"><strong>Shoping-Cart</strong></a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 


  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart wow bounceInUp animated">
          <div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
          <div class="table-responsive">
            <form method="post">
              <input type="hidden" value="#" name="form_key">
              <fieldset>




                <table class="data-table cart-table" id="shopping-cart-table">
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>   
                      <th rowspan="1"><span class="nobr">Product Name</span></th>
                      <th rowspan="1"></th>
                      <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                      <th class="a-center" rowspan="1">Qty</th>
                      <th colspan="1" class="a-center">Subtotal</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="7"><button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span></button>
                        
                        <!-- <button class="button btn-update update_cart" title="Update Cart" value="update_cart" name="update_cart" type="submit"><span><span>Update Cart</span></span></button> -->

                        <button id="clear_cart" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span><span>Clear Cart</span></span></button></td>
                    </tr>
                  </tfoot>


                  <tbody>

<?php if(!empty($_SESSION['shopping_cart'])){ ?>

<?php foreach($_SESSION["shopping_cart"] as $keys => $values) { ?>


                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="Sample Product" href="#"><img width="75" alt="Sample Product" src="admin/images/<?php echo $values["featured_img"]; ?>"></a></td>
                      <td><h2 class="product-name"> <a href="#"><?php echo $values["product_name"]; ?></a> </h2></td>
                      <td class="a-center">

                  <input type='hidden' name='product_id' id='quantity[1]' value="<?php echo $values["product_id"]; ?>">      

                        <!-- <a title="Edit item parameters" class="edit-bnt" href="#configure/id/15945/"></a> -->
                      </td>
                      <td class="a-right"><span class="cart-price"> <span class="price">Rs. <?php echo $values["product_price"]; ?></span> </span></td>

                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="<?php echo $values["product_quantity"]; ?>" name="product_quantity" id="quantity<?php echo $values["product_id"]; ?>" ></td>

                <?php 
                $totalprice = $values["product_quantity"] * $values["product_price"];
                 ?>


                      <td class="a-right movewishlist"><span class="cart-price"> <span class="price">Rs. <?php echo $totalprice; ?></span> </span></td>
                      <td class="a-center last">
                      <button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">
                      <span><span>Remove</span></span>
                      </button>
                      <button name="update_cart" class="btn btn-primary btn-xs update_cart" id="<?php echo $values["product_id"]; ?>">
                      <span><span>Update</span></span>
                      </button>

                      <!-- <a class="button remove-item delete" name="remove" title="Remove item" href="#"><span><span>Remove item</span></span></a> -->
                      </td>

           <!--  <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">
                      <span><span>Remove item</span></span>
                      </button></td> -->
                    </tr>


                    <?php 
                 // $totalprice = 0;
                 
                  $totalprice1 += $totalprice;

// if(isset($_POST['update_cart'])){


//       // $is_available = 0;
//       foreach($_SESSION["shopping_cart"] as $keys => $values)
//       {
//         // if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
//         // {
//           $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_POST["product_quantity"];
//         // }
//       }
// }




                  ?>
                    



<?php }} ?>





                  </tbody>


                </table>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- BEGIN CART COLLATERALS -->
        <div class="cart-collaterals row  wow bounceInUp animated">
          
<!-- 
          <div class="col-sm-4">
            <div class="shipping">
              <h3>Estimate Shipping and Tax</h3>
              <div class="shipping-form">
                <form id="shipping-zip-form" method="post" action="#estimatePost/">
                  <p>Enter your destination to get a shipping estimate.</p>
                  <ul class="form-list">
                    <li>
                      <label class="required" for="country"><em>*</em>Country</label>
                      <div class="input-box">
                        <select title="Country" class="validate-select" id="country" name="country_id">
                          <option value="AF">Afghanistan</option>
                          <option value="AX">Åland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                        
                        </select>
                      </div>
                    </li>
                    <li>
                      <label for="region_id">State/Province</label>
                      <div class="input-box">
                        <select title="State/Province" name="region_id" id="region_id" class="required-entry validate-select">
                          <option value="">Please select region, state or province</option>
                          <option value="1" title="Alabama">Alabama</option>
                          <option value="2" title="Alaska">Alaska</option>
                         
                        </select>
                        <input type="text" class="input-text required-entry" title="State/Province" value="" name="region" id="region">
                      </div>
                    </li>
                    <li>
                      <label for="postcode">Zip/Postal Code</label>
                      <div class="input-box">
                        <input type="text" value="" name="estimate_postcode" id="postcode" class="input-text validate-postcode">
                      </div>
                    </li>
                  </ul>
                  <div class="buttons-set11">
                    <button class="button get-quote" onclick="coShippingMethodForm.submit()" title="Get a Quote" type="button"><span>Get a Quote</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
 -->

          <div class="col-sm-8">
            <div class="discount">
              <h3>Discount Codes</h3>
              <form method="post" id="discount-coupon-form">
                <label for="coupon_code">Enter your coupon code if you have one.</label>
                <input type="hidden" id="remove-coupone" name="remove">
                <input type="text" name="codes" id="coupon_code" class="input-text fullwidth">
                <button value="Apply Coupon" type="submit" name="match" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
              </form>
            </div>
          </div>
          <?php

if(isset($_POST['match'])){

    $entercode = $_POST['codes'];


    $query = "SELECT * FROM coupon WHERE codes= '{$entercode}' && used='Not used'";
    $result = mysqli_query($connection, $query);



if(mysqli_num_rows($result) > 0){ 
    // $query = mysqli_query($connection, "UPDATE coupon SET used='{$user}' WHERE codes= '{$entercode}' ");  


    while($row = fetch_array($result)) {
      $discount = $row['amount'];
    }  

     echo "code is valid";
}else{
    echo "invalid code";
}
}
?>
          <div class="col-sm-4">
            <div class="totals">
              <h3>Shopping Cart Total</h3>
              <div class="inner">
                <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                  <colgroup>
                  <col>
                  <col width="1">
                  </colgroup>
                  <tfoot>
                    <tr>
                      <td class="a-left" colspan="1"><strong>Grand Total</strong></td>
                      <td class="a-right"><strong><span class="price">Rs. <?php echo $totalprice1-$discount; ?></span></strong></td>
                    </tr>
                  </tfoot>
                  <tbody>

                    <tr>
                      <td class="a-left" colspan="1"> Subtotal </td>
                      <td class="a-right"><span class="price"> Rs. <?php echo $totalprice1; ?></span></td>
                    </tr>

                    <tr>
                      <td class="a-left" colspan="1"> Discount</td>
                      <td class="a-right"><span class="price"> - Rs. <?php echo $discount; ?></span></td>
                    </tr>
                    <!-- discount -->

                    

                  </tbody>
                </table>
                <ul class="checkout">
                  <li>
                    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" onclick="window.location.href='checkout.php'"><span>Proceed to Checkout</span></button>

                  </li>
             
                  
                  <!-- <li><a href="#" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a> </li> -->

                  
                  <br>
                </ul>
              </div>
              <!--inner--> 
            </div>
            <!--totals--> 
          </div>
          <!--cart-collaterals--> 
          
        </div>



        <div class="crosssel wow bounceInUp animated">
          <div class="new_title center">
            <h2>Based on your selection, you may be interested in the following items:</h2>
          </div>
          <div class="category-products">
            <ul id="crosssell-products-list" class="products-grid first odd">




             <?php show_product_on_search(); ?>





            </ul>
          </div>
        </div>


      </div>
    </div>
  </section>
 <?php include('include/footer_menu.php'); ?>
  <!-- End Footer --> 
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
 <?php include('include/footer.php'); ?>

</body>
</html>