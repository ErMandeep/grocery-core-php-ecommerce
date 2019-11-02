
<?php include('include/header.php'); ?>
<?php
if(empty($_SESSION['user'])){
    header("location: login.php");
}
?>

<?php if(isset($_SESSION['id'])) {
$login = $_SESSION['id'];
}?>
<title>Checkout</title>


<body>
<div class="page"> 
  <!-- Header -->
<?php include('include/cart.php'); ?>
  <!-- end header --> 


    <!-- end breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="grid.html" title="Go to Home Page"><strong>Checkout</strong></a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 

  <!-- main-container -->
  <div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 wow bounceInUp animated">
          <div class="page-title">
            <!-- <h1>Checkout</h1> -->
          </div>
          <ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
             <!--  <div class="step-title"> <span class="number">1</span>
                <h3>Checkout Method</h3>
                <a href="#">Edit</a>  
              </div> -->
              <div id="checkout-step-billing" class="step a-item">
                <form id="co-billing-form" method="post">
                  <fieldset class="group-select">
                    <ul>
 <?php 

$query = query(" SELECT * FROM shipping_address WHERE client_id = " . escape_string($login) . " ");

// echo $login;
// $productID = $_GET['id'];

// $query = query("SELECT * FROM products INNER JOIN images ON products.id = images.productID");
confirm($query);

while($row = fetch_array($query)) {

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$state = $row['state'];
$pincode = $row['pincode'];


}

       ?>
                      <li>
                        <fieldset>
                          <!-- <legend>New Address</legend> -->
                          <!-- <input type="hidden" name="billing[address_id]" value="4269" id="billing:address_id"> -->
                          <ul>
                            <li>
                              <div class="customer-name">
                                <div class="input-box name-firstname">
                                  <label for="billing:firstname"> First Name <span class="required">*</span> </label>
                                  <br>
                                  <input type="text" id="billing:firstname" name="first_name" title="First Name" class="input-text required-entry" value=" <?php echo $first_name; ?> ">
                                </div>
                                <div class="input-box name-lastname">
                                  <label for="billing:lastname"> Last Name <span class="required">*</span> </label>
                                  <br>
                                  <input type="text" id="billing:lastname" name="last_name" title="Last Name" class="input-text required-entry" value=" <?php echo $last_name; ?> ">
                                </div>
                              </div>
                            </li>
                        
                            <li>
                              <label for="billing:street1">Address <span class="required">*</span></label>
                              <br>
                              <input type="text" title="Street Address" name="address1" id="billing:street1" class="input-text required-entry" value=" <?php echo $address1; ?> ">
                            </li>
                            <li>
                              <input type="text" title="Street Address 2" name="address2" id="billing:street2" class="input-text" value=" <?php echo $address2; ?> ">
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="billing:city">City <span class="required">*</span></label>
                                <br>
                                <input type="text" title="City" name="city" class="input-text required-entry" id="billing:city" value=" <?php echo $city; ?> ">
                              </div>
                              <div class="input-box">
                                <label>State/Province <span class="required">*</span></label>
                                <br>
    <select id="billing:region_id" name="state" title="State/Province" class="validate-select">
      <option value=" <?php echo $state; ?> ">Please select region, state or province</option>
  
  <option value="Andaman and Nicobar Islands" <?php if("Andaman and Nicobar Islands"==$state) echo 'selected="selected"'; ?> >Andaman and Nicobar Islands</option>
  <option value="Andhra Pradesh"<?php if("Andhra Pradesh"==$state) echo 'selected="selected"'; ?>>Andhra Pradesh</option>
  <option value="Arunachal Pradesh"<?php if("Arunachal Pradesh"==$state) echo 'selected="selected"'; ?>>Arunachal Pradesh</option>
  <option value="Assam"<?php if("Assam"==$state) echo 'selected="selected"'; ?>>Assam</option>
  <option value="Bihar" <?php if("Bihar"==$state) echo 'selected="selected"'; ?>>Bihar</option>
  <option value="Chandigarh" <?php if("Chandigarh"==$state) echo 'selected="selected"'; ?>>Chandigarh</option>
  <option value="Chhattisgarh" <?php if("Chhattisgarh"==$state) echo 'selected="selected"'; ?>>Chhattisgarh</option>
  <option value="Dadra and Nagar Haveli" <?php if("HDadra and Nagar Haveli"==$state) echo 'selected="selected"'; ?>>Dadra and Nagar Haveli</option>
  <option value="Daman and Diu"<?php if("Daman and Diu"==$state) echo 'selected="selected"'; ?>>Daman and Diu</option>
  <option value="Delhi"<?php if("Delhi"==$state) echo 'selected="selected"'; ?>>Delhi</option>
  <option value="Goa"<?php if("Goa"==$state) echo 'selected="selected"'; ?>>Goa</option>
  <option value="Gujarat"<?php if("Gujarat"==$state) echo 'selected="selected"'; ?>>Gujarat</option>
  <option value="Haryana"<?php if("Haryana"==$state) echo 'selected="selected"'; ?>>Haryana</option>
  <option value="Himachal Pradesh"<?php if("Himachal Pradesh"==$state) echo 'selected="selected"'; ?> >Himachal Pradesh</option>
  <option value="Jammu and Kashmir"<?php if("Jammu and Kashmir"==$state) echo 'selected="selected"'; ?>>Jammu and Kashmir</option>
  <option value="Jharkhand"<?php if("Jharkhand"==$state) echo 'selected="selected"'; ?>>Jharkhand</option>
  <option value="Karnataka"<?php if("HKarnataka"==$state) echo 'selected="selected"'; ?>>Karnataka</option>
  <option value="Kerala"<?php if("Kerala"==$state) echo 'selected="selected"'; ?>>Kerala</option>
  <option value="Lakshadweep"<?php if("Lakshadweep"==$state) echo 'selected="selected"'; ?>>Lakshadweep</option>
  <option value="Madhya Pradesh"<?php if("Madhya Pradesh"==$state) echo 'selected="selected"'; ?>>Madhya Pradesh</option>
  <option value="Maharashtra"<?php if("Maharashtra"==$state) echo 'selected="selected"'; ?>>Maharashtra</option>
  <option value="Manipur"<?php if("Manipur"==$state) echo 'selected="selected"'; ?>>Manipur</option>
  <option value="Meghalaya"<?php if("Meghalaya"==$state) echo 'selected="selected"'; ?>>Meghalaya</option>
  <option value="Mizoram"<?php if("Mizoram"==$state) echo 'selected="selected"'; ?>>Mizoram</option>
  <option value="Nagaland"<?php if("Nagaland"==$state) echo 'selected="selected"'; ?>>Nagaland</option>
  <option value="Orissa"<?php if("Orissa"==$state) echo 'selected="selected"'; ?>>Orissa</option>
  <option value="Pondicherry"<?php if("Pondicherry"==$state) echo 'selected="selected"'; ?>>Pondicherry</option>
  <option value="Punjab"<?php if("Punjab"==$state) echo 'selected="selected"'; ?>>Punjab</option>
  <option value="Rajasthan"<?php if("Rajasthan"==$state) echo 'selected="selected"'; ?>>Rajasthan</option>
  <option value="Sikkim"<?php if("Sikkim"==$state) echo 'selected="selected"'; ?>>Sikkim</option>
  <option value="Tamil Nadu"<?php if("Tamil Nadu"==$state) echo 'selected="selected"'; ?>>Tamil Nadu</option>
  <option value="Tripura"<?php if("Tripura"==$state) echo 'selected="selected"'; ?>>Tripura</option>
  <option value="Uttaranchal"<?php if("Uttaranchal"==$state) echo 'selected="selected"'; ?>>Uttaranchal</option>
  <option value="Uttar Pradesh"<?php if("Uttar Pradesh"==$state) echo 'selected="selected"'; ?>>Uttar Pradesh</option>
  <option value="West Bengal"<?php if("West Bengal"==$state) echo 'selected="selected"'; ?>>West Bengal</option>                                 
    </select>
                                <!-- <input type="text" id="billing:region" name="billing[region]" value="Alabama" title="State/Province" class="input-text required-entry">
                              </div> -->
                            </li>
                            <li>
                              <div class="input-box">
                                <label for="billing:postcode">Zip/Postal Code <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Zip/Postal Code" name="pincode" id="billing:postcode" class="input-text validate-zip-international required-entry" value=" <?php echo $pincode; ?> ">
                              </div>
                              <div class="input-box">
                                <label for="billing:country_id">Country <span class="required">*</span></label>
                                <br>
                                <select id="billing:country_id" class="validate-select" title="Country" value=" India">
                                  
                                  <option value="india" selected>India</option>
                                  
                                </select>
                              </div>
                            </li>
                       
                          </ul>
                        </fieldset>
                      </li>
                   
                    </ul>
                    <p class="require"><em class="required">* </em>Required Fields</p>
                    <!-- <button type="button" class="button continue" name="save_address"><span>Continue</span></button> -->
                    <input type="submit" name="save_address" class="button continue" value="Continue">
                  </fieldset>
                </form>
              </div>
            </li>


<?php 
    if(isset($_POST['save_address'])) {

$first_name           = escape_string($_POST['first_name']);
$last_name            = escape_string($_POST['last_name']);
$address1             = escape_string($_POST['address1']);
$address2             = escape_string($_POST['address2']);
$city                 = escape_string($_POST['city']);
$state                = escape_string($_POST['state']);
$pincode              = escape_string($_POST['pincode']);


       $add_client_query = "UPDATE shipping_address SET ";
        $add_client_query .="first_name = '{$first_name}',";       
        $add_client_query .="last_name = '{$last_name}',";       
        $add_client_query .="address1 = '{$address1}',";       
        $add_client_query .="address2 = '{$address2}',";       
        $add_client_query .="city = '{$city}',";       
        $add_client_query .="pincode = '{$pincode}',";       
        $add_client_query .="state = '{$state}'";       
        $add_client_query .= "WHERE client_id = " .escape_string($login). "";      
        
        $clients_result = mysqli_query($connection, $add_client_query);


confirm($clients_result);

if($update_img || $clients_result){
    header('Location: checkout.php');
}

        }

 ?>      




          </ol>
        </section>
        <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
          <div class="block block-progress">
            <div class="block-title ">Your Checkout</div>
            <div class="block-content">
              <dl>
                <!-- <dt class="complete"> Billing Address <span class="separator">|</span> <a onClick="checkout.gotoSection('billing'); return false;" href="#billing">Change</a> </dt>
                <dd class="complete">
                  <address>
                  swapna taru<br>
                  Better Technology Labs.<br>
                  23 North Main Stree<br>
                  Windsor<br>
                  Holtsville,  New York, 00501<br>
                  United States<br>
                  T: 5465465 <br>
                  F: 466523
                  </address>
                </dd> -->
                <dt class="complete"> Shipping Address <span class="separator">|</span> <!-- <a onClick="checkout.gotoSection('shipping');return false;" href="#payment">Change</a> --> </dt>
                <dd class="complete">
                  <address>
                  <?php echo $first_name." ".$last_name;  ?><br>
                  <?php echo $address1; ?>.<br>
                  <?php echo $address2; ?><br>
                  <?php echo $city; ?><br>
                   India <br>
                  State: <?php echo $state; ?> <br>
                  Pincode: <?php echo $pincode; ?>
                  </address>
                </dd>
                <dt class="complete"> Shipping Method <span class="separator">|</span> <!-- <a onClick="checkout.gotoSection('shipping_method'); return false;" href="#shipping_method">Change</a> --> </dt>
                <dd class="complete"> Flat Rate - Fixed <br>
                  <span class="price">$15.00</span> </dd>
                <dt> Payment Method </dt>
                <dd class="complete"></dd>
              </dl>
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
          <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015. All Rights Reserved. Designed by <a href="#">magikcommerce.com</a> </div>
          <div class="col-sm-7 col-xs-12 company-links">
            <ul class="links">
              <li><a href="#" title="Magento Themes">Magento Themes</a></li>
              <li><a href="#" title="Premium Themes">Premium Themes</a></li>
              <li><a href="#" title="Responsive Themes">Responsive Themes</a></li>
              <li class="last"><a href="#" title="Magento Extensions">Magento Extensions</a></li>
            </ul>
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