<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Dashboard</title>

<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" href="css/animate.css" type="text/css">    
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="page"> 
 <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
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
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist"  href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                <div class="login"><a title="Login" href="login.html"><span  class="hidden-xs">Log In</span></a></div>
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
          <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="images/logo.png"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="cat" method="POST" id="search_mini_form" name="Categories">
              
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
                <div class="cart-box"><span class="title">cart</span><span id="cart-total">2 item </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="products-images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="Downloadable Product">Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="products-images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="  Sample Product "> Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                      </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$420.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
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
  <!-- end header --> 

  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated">
          <div class="my-account">
            <div class="page-title">
              <h2>My Dashboard</h2>
            </div>
            <div class="dashboard">
              <div class="welcome-msg"> <strong>Hello, pranali deshmukh!</strong>
                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
              </div>
              <div class="recent-orders">
                <div class="title-buttons"><strong>Recent Orders</strong> <a href="#">View All </a> </div>
                <div class="table-responsive">
                  <table class="data-table" id="my-orders-table">
                    
                    <thead>
                      <tr class="first last">
                        <th>Order #</th>
                        <th>Date</th>
                        <th>Ship to</th>
                        <th><span class="nobr">Order Total</span></th>
                        <th>Status</th>
                        <th>&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="first odd">
                        <td>500000002</td>
                        <td>9/9/10 </td>
                        <td>pranali d</td>
                        <td><span class="price">$5.00</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                      </tr>
                      <tr class="last even">
                        <td>500000001</td>
                        <td>9/9/10 </td>
                        <td>pranali d</td>
                        <td><span class="price">$1,397.99</span></td>
                        <td><em>Pending</em></td>
                        <td class="a-center last"><span class="nobr"> <a href="#">View Order</a> <span class="separator">|</span> <a href="#">Reorder</a> </span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box-account">
                <div class="page-title">
                  <h2>Account Information</h2>
                </div>
                <div class="col2-set">
                  <div class="col-1">
                    <h5>Contact Information</h5>
                    <a href="#">Edit</a>
                    <p> pranali deshmukh<br>
                      pranalid15@gmail.com<br>
                      <a href="#">Change Password</a> </p>
                  </div>
                  <div class="col-2">
                    <h5>Newsletters</h5>
                    <a href="#">Edit</a>
                    <p> You are currently not subscribed to any newsletter. </p>
                  </div>
                </div>
                <div class="col2-set">
                  <h4>Address Book</h4>
                  <div class="manage_add"><a href="#">Manage Addresses</a> </div>
                  <div class="col-1">
                    <h5>Primary Billing Address</h5>
                    <address>
                    pranali d<br>
                    aundh<br>
                    tyyrt,  Alabama, 46532<br>
                    United States<br>
                    T: 454541 <br>
                    <a href="#">Edit Address</a>
                    </address>
                  </div>
                  <div class="col-2">
                    <h5>Primary Shipping Address</h5>
                    <address>
                    pranali d<br>
                    aundh<br>
                    tyyrt,  Alabama, 46532<br>
                    United States<br>
                    T: 454541 <br>
                    <a href="#">Edit Address</a>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
          <div class="block block-account">
            <div class="block-title">My Account</div>
            <div class="block-content">
              <ul>
                <li class="current"><a>Account Dashboard</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/customer/account/edit/">Account Information</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/customer/address/">Address Book</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/sales/order/history/">My Orders</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/sales/billing_agreement/">Billing Agreements</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/sales/recurring_profile/">Recurring Profiles</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/review/customer/">My Product Reviews</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/tag/customer/">My Tags</a></li>
                <li><a href="http://bit.do/bromq">My Wishlist</a></li>
                <li><a href="http://demo.magentomagik.com/computerstore/downloadable/customer/products/">My Downloadable</a></li>
                <li class="last"><a href="http://demo.magentomagik.com/computerstore/newsletter/manage/">Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
          <div class="block block-compare">
            <div class="block-title ">Compare Products (2)</div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <input type="hidden" value="2173" class="compare-item-id">
                  <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                <li class="item last even">
                  <input type="hidden" value="2174" class="compare-item-id">
                  <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!--End main-container --> 
  <!-- Footer -->
  <footer class="footer wow bounceInUp animated">
    <div class="brand-logo ">
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo2.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo3.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo5.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo6.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo1.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class="item"> <a href="#x"><img src="images/b-logo4.png" alt="Image"></a> </div>
              <!-- End Item --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-7">
            <div class="block-subscribe">
              <div class="newsletter">
                <form>
                  <h4>newsletter</h4>
                  <input type="text" placeholder="Enter your email address" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter1" name="email">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-5">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-middle container">
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="footer-logo"><a href="index.html" title="Logo"><img src="images/logo.png" alt="logo"></a></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu. </p>
          <div class="payment-accept">
            <div><img src="images/payment-1.png" alt="payment"> <img src="images/payment-2.png" alt="payment"> <img src="images/payment-3.png" alt="payment"> <img src="images/payment-4.png" alt="payment"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Shopping Guide</h4>
          <ul class="links">
            <li class="first"><a href="#" title="How to buy">How to buy</a></li>
            <li><a href="faq.html" title="FAQs">FAQs</a></li>
            <li><a href="#" title="Payment">Payment</a></li>
            <li><a href="#" title="Shipment&lt;/a&gt;">Shipment</a></li>
            <li><a href="#" title="Where is my order?">Where is my order?</a></li>
            <li class="last"><a href="#" title="Return policy">Return policy</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Style Advisor</h4>
          <ul class="links">
            <li class="first"><a title="Your Account" href="login.html">Your Account</a></li>
            <li><a title="Information" href="#">Information</a></li>
            <li><a title="Addresses" href="#">Addresses</a></li>
            <li><a title="Addresses" href="#">Discount</a></li>
            <li><a title="Orders History" href="#">Orders History</a></li>
            <li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4">
          <h4>Information</h4>
          <ul class="links">
            <li class="first"><a href="#" title="privacy policy">Privacy policy</a></li>
            <li><a href="#/" title="Search Terms">Search Terms</a></li>
            <li><a href="#" title="Advanced Search">Advanced Search</a></li>
            <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
            <li><a href="#" title="Suppliers">Suppliers</a></li>
            <li class=" last"><a href="#" title="Our stores" class="link-rss">Our stores</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-4">
          <h4>Contact us</h4>
          <div class="contacts-info">
            <address>
            <i class="add-icon">&nbsp;</i>123 Main Street, Anytown, <br>
            &nbsp;CA 12345  USA
            </address>
            <div class="phone-footer"><i class="phone-icon">&nbsp;</i> +1 800 123 1234</div>
            <div class="email-footer"><i class="email-icon">&nbsp;</i> <a href="#">support@magikcommerce.com</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015. All Rights Reserved. Designed by <a href="#">Webmax</a> </div>
          <div class="col-sm-7 col-xs-12 company-links">
           
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
</body>
</html>