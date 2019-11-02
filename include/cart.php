 
<?php 

if(!empty($_SESSION['shopping_cart'])){
			$itemtotal = 0;
			$totalprice1 = 0;
foreach($_SESSION["shopping_cart"] as $item) {
	$itemtotal += $item['product_quantity'];
}
}else{
	$itemtotal = 0;
	$totalprice1 = 0;
	$_SESSION['shopping_cart'] = 0;
    unset($_SESSION["shopping_cart"]);
}

?>

  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6" style="    font-size: 12px;">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="images/english.png" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
              </ul>
            </div>
            
            <!-- End Header Language --> 
            
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
              </ul>
            </div>
            
            <!-- End Header Currency -->
            
            <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
          </div>
          <div class="col-xs-6"> 
            
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.php"><span class="hidden-xs">My Account</span></a></div>
                <!-- <div class="wishlist"><a title="My Wishlist"  href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div> -->
                <div class="check"><a title="Checkout" href="checkout.php"><span class="hidden-xs">Checkout</span></a></div>

<?php 
if(isset($_SESSION['user'])){
$user = $_SESSION['user'];
}else{
  $user = '';
}
?>

        <?php if(!$user): ?>
                <div class="login"><a title="Login" href="login.php"><span  class="hidden-xs">Log In</span></a></div>
        <?php endif; ?>     

        <?php if($user): ?>
              <div class="login"><a  onclick="return confirm('Are you sure?')" href="logout.php"><span  class="hidden-xs">Log Out</span></a></div>

        <?php endif; ?> 
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2"> 
          <!-- Header Logo --> 
          <a class="logo" title="Magento Commerce" href="index.php"><img alt="Magento Commerce" src="images/logo.png"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="search.php" method="POST" id="search_mini_form" name="Categories">
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
            </form>

          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-2 col-sm-3 col-md-2">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                <div class="cart-box"><span class="title">cart</span><span id="cart-total"><?php echo $itemtotal; ?> item </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <!-- <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="products-images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="http://ow.ly/XqzNo" title="Downloadable Product">Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li> -->


                    <?php if(!empty($_SESSION['shopping_cart'])){ ?>

<?php foreach($_SESSION["shopping_cart"] as $keys => $values) { ?>
                    <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="admin/images/<?php echo $values["featured_img"]; ?>" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <!-- <a href="action.php?action=remove=<?php echo $values["product_id"]; ?>" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> --> <!-- <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a> -->


                    <button name="delete" class="glyphicon glyphicon-remove delete" id="<?php echo $values["product_id"]; ?>">
                      <i class="glyphicon glyphicon-remove">&nbsp;</i>
                      </button>
                          <p class="product-name"> <a href="#" title="  Sample Product "> <?php echo $values["product_name"]; ?> </a> </p>
                        </div>
              <?php 
                $totalprice = $values["product_quantity"] * $values["product_price"];
                 ?>

                        <div class="product-details-bottom"> <span class="price">Rs. <?php echo $totalprice; ?></span> <span class="title-desc">Qty:</span> <strong><?php echo $values["product_quantity"]; ?></strong> </div>
                      </div>
                    </li>
<?php 
// $totalprice = 0;

$totalprice1 += $totalprice;

  ?>

                <?php }} ?>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">Rs. <?php echo $totalprice1; ?></span></div>
                  <div class="actions">
                    <!-- <button class="btn-checkout" type="button"><span>Checkout</span></button> -->
                    <a href="checkout.php" class="btn-checkout"><span>Checkout</span></a>
                    <a href="shopping_cart.php" class="view-cart"><span>View Cart</span></a>
                    <!-- <button class="view-cart" type="button"><span>View Cart</span></button> -->
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>