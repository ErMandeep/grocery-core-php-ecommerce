<?php include('include/header.php'); ?>
<title>Home</title>
<style>
.nn{
    padding: 11px 38px 12px 37px;
    line-height: 40px;
    background-color: #ffffff;
    color: #111433;
    border-radius: 0px;
  }
</style>
<body>
<div class="page"> 
  <!-- Header -->
<?php include('include/cart.php'); ?>
  <!-- end header --> 

<?php include('include/menu.php'); ?>
  

<?php 

         $query = "SELECT * FROM slider WHERE id = 1";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $id = $row['id'];
          $slider1 = $row['slider1'];
          $slider2 = $row['slider2'];
          $slider3 = $row['slider3'];
        }

 ?>

  <!-- Slider -->
  <div id="magik-slideshow" class="magik-slideshow">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8 wow bounceInUp animated">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider_img_2.jpg'><img src='admin/images/<?php echo $slider1; ?>' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Exclusive Products</div>
                  <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Food & Food</div>
                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.</div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider_img_2.jpg' class="black-text"><img src='admin/images/<?php echo $slider2; ?>'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Super Hot</div>
                  <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Go Lightly</div>
                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,<br>
                    augue facilisis facilisis.</div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </li>
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
        <?php 

      $select_image = query("SELECT * FROM banner WHERE id = 1"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner1 = $row['image'];
}

         ?>
        <aside class="col-xs-12 col-sm-12 col-md-4 wow bounceInUp animated">
          <div class="RHS-banner">
            <div class="add"><a href="#"><img alt="banner-img" src="admin/images/<?php echo $banner1; ?>"></a>
              <div class="overlay"><a class="info" href="#">Learn More</a></div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <!-- end Slider --> 
  
  <!-- header service -->
  
  <div class="container">
    <div class="header-service wow bounceInUp animated">
      <div class="col-lg-3 col-sm-6 col-xs-3" style="font-size: 12px;">
        <div class="content">
          <div class="icon-truck">&nbsp;</div>
          <span class="hidden-xs"><strong>FREE SHIPPING</strong> on order over $99</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3" style="font-size: 12px;">
        <div class="content">
          <div class="icon-support">&nbsp;</div>
          <span class="hidden-xs"><strong>Customer Support</strong> Service</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3" style="font-size: 12px;">
        <div class="content">
          <div class="icon-money">&nbsp;</div>
          <span class="hidden-xs">3 days <strong>Money Back</strong> Guarantee</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3" style="font-size: 12px;">
        <div class="content">
          <div class="icon-dis">&nbsp;</div>
          <span class="hidden-xs"><strong>5% discount</strong> on order over $199</span></div>
      </div>
    </div>
  </div>
  <!-- end header service --> 
  
  <!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Best Seller</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 
              

<?php 

$query = query("SELECT * FROM Products ORDER BY id");
confirm($query);

while($row = fetch_array($query)) {

?>

<div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>"> <img src="admin/images/<?php echo $row['featured_img']; ?>" class="img-responsive" alt="product-image" /> </a>


                      <div class="hover_fly">

                         <a class="quick-view" href="product_detail.php?id=<?php echo $row['id']; ?>">
                        <div><i class="icon-eye-open"></i><span>Quick view</span></div>
                        </a> 
                         </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="#"></a> <?php echo $row['product_name']; ?> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>        
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs. <?php echo $row['price']; ?> </span> </p>
<p class="old-price"> <span class="price-sep">-</span> <span class="price"> Rs. <?php echo $row['price']; ?> </span> </p> 
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>


 <?php } ?>


 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- offer banner section -->
  
  <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <?php 

      $select_image = query("SELECT * FROM banner WHERE id = 2"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner2 = $row['image'];
}

      $select_image = query("SELECT * FROM banner WHERE id = 3"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner3 = $row['image'];
        }

      $select_image = query("SELECT * FROM banner WHERE id = 4"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner4 = $row['image'];
        }        

   


         ?>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner1" src="admin/images/<?php echo $banner2; ?>"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner2" src="admin/images/<?php echo $banner3; ?>"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner3" src="admin/images/<?php echo $banner4; ?>"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Featured Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          


<?php 
$featured_products = query("SELECT * FROM Products ORDER BY id");
confirm($featured_products);

while($row = fetch_array($featured_products)) {
?>



          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?> "> <img src="admin/images/<?php echo $row['featured_img']; ?> " class="img-responsive" alt="a" /> </a>

                
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>  {$row['id']}">  <?php echo $row['product_name']; ?> </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rs. <?php echo $row['price']; ?>   </span> </p>
                      
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <a href="product_detail.php?id=<?php echo $row['id']; ?> "> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>


<?php } ?>     
          <!-- Item -->
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Featured Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          

<?php 
$featured_products = query("SELECT * FROM Products ORDER BY id");
confirm($featured_products);

while($row = fetch_array($featured_products)) {
?>



          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Sale</div>
              <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?> "> <img src="admin/images/<?php echo $row['featured_img']; ?> " class="img-responsive" alt="a" /> </a>

                
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>  {$row['id']}">  <?php echo $row['product_name']; ?> </a> </div>
                  <!--item-title-->
                  <div class="item-content">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating"></div>
                      </div>
                    </div>
                    <div class="price-box">
                      <p class="special-price"> <span class="price"> Rs. <?php echo $row['price']; ?>   </span> </p>
                      
                    </div>
                  </div>
                  <!--item-content--> 
                </div>
                <!--info-inner-->
                <div class="actions">
                  <a href="product_detail.php?id=<?php echo $row['id']; ?> "> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>


<?php } ?>     
          <!-- Item -->      
        
         
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 
<?php 
            $select_image = query("SELECT * FROM banner WHERE id = 5"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner5 = $row['image'];
        }    

 ?>



  <!-- promo banner section -->
  <div class="promo-banner-section container wow bounceInUp animated">
    <div class="row">
      <div class="col-lg-12"> <img alt="promo-banner3" src="admin/images/<?php echo $banner5; ?>"></div>
    </div>
  </div>
  <!-- End promo banner section --> 
  <!-- middle slider -->
  <section class="middle-slider container wow bounceInUp animated">
    <div class="row">
      <div class="col-md-6">
        <div class="bag-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Products</h2>
            </div>
            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                
       <?php             

         $product_list_1 = query("SELECT * FROM Products ORDER BY id");
      confirm($product_list_1);

      while($row = fetch_array($product_list_1)) {
      ?>



              <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>"> <img src="admin/images/<?php echo $row['featured_img']; ?>" class="img-responsive" alt="a" /> </a>
                      
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>"> <?php echo $row['product_name']; ?> </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs. <?php echo $row['price']; ?>  </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                       <a href="product_detail.php?id=<?php echo $row['id']; ?>"> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>

                 <?php } ?>
             
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="shoes-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Products</h2>
            </div>
            <div id="shoes-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
<?php 


$product_list_2 = query("SELECT * FROM Products ORDER BY id");
confirm($product_list_2);

while($row = fetch_array($product_list_2)) {

$qty = $row['product_quantity'];

?>

              <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>"> <img src="admin/images/<?php echo $row['featured_img']; ?>" class="img-responsive" alt="a" /> </a>
                      
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id=<?php echo $row['id']; ?>"> <?php echo $row['product_name']; ?>  </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs. <?php echo $row['price']; ?>  </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class="actions">

<a href="product_detail.php?id=<?php echo $row['id']; ?>"> <button type="button" title="Add to Cart" class="button btn-cart "><span>Add to Cart</span></button> </a>

                    
                        
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>

                <?php } ?>


                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End middle slider --> 
        <?php 

      $select_image = query("SELECT * FROM banner WHERE id = 6"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner6 = $row['image'];
}

      $select_image = query("SELECT * FROM banner WHERE id = 7"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner7 = $row['image'];
        }

      $select_image = query("SELECT * FROM banner WHERE id = 8"); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner8 = $row['image'];
        }        

   ?>


    <!-- offer banner section -->
  
  <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner1" src="admin/images/<?php echo $banner6; ?>"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner2" src="admin/images/<?php echo $banner7; ?>"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner3" src="admin/images/<?php echo $banner8; ?>"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end offer banner section --> 
  
<?php include('include/footer_menu.php'); ?>
  

  <!-- End Footer --> 
  
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 770,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>


        <script src="js2/main.js"></script> <!-- Resource jQuery -->
<script src="js2/jquery.menu-aim.js"></script> <!-- menu aim -->
<?php include('include/footer.php'); ?>
</body>
</html>