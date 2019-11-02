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
  
  <!-- Slider -->

  </div>
  <!-- end Slider --> 




  
  <!-- header service -->

  </div>
  <!-- end header service --> 
  
  <!-- main container -->
  
  <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 

  <?php 

          // $query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['product_category_id']) . " ");
          
              isset($_GET['category']){

              $cat_name = $_GET['category'];

              $sql = "SELECT* FROM products WHERE product_category_id = '$cat_name'";
              confirm($query);

              while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              $product_name = $row['product_name'];
              $price = $row['price'];
              $product_category_id = $row['product_category_id'];
              $featured_img = $row['featured_img'];
              $description = $row['description'];


          
   ?>
              
                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <!-- <div class="sale-label sale-top-right">Sale</div> -->
                    <div class="product-image-area"> <a class="product-image" title="Sample Product" href="product_detail.php?id=<?php echo $id; ?>"> <img src="admin/images/<?php echo $featured_img; ?>" class="img-responsive" alt="product-image" /> </a>
                      <div class="hover_fly"> <a class="exclusive ajax_add_to_cart_button" href="product_detail.php?id=<?php echo $id; ?>" title="Add to cart">
                        <div><i class="icon-shopping-cart"></i><span>Add to cart</span></div>
                        </a> 
                       
                         </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title=" Sample Product" href="product_detail.php?id=<?php echo $id; ?>"> <?php echo $product_name; ?> </a> </div>
                        <!--item-title-->
                        <div class="item-content">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating"></div>
                            </div>
                          </div>
                          <div class="price-box">
                            <p class="special-price"> <span class="price">Rs. <?php echo $price; ?> </span> </p>
                            <!-- <p class="old-price"> <span class="price-sep">-</span> <span class="price">Rs. <?php echo $price; ?></span> </p> -->
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->                  
 
<?php }} ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- offer banner section -->
 
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->

  <!-- End Featured Slider --> 
  <!-- Featured Slider -->

  <!-- End Featured Slider --> 





  <!-- End promo banner section --> 
  <!-- middle slider -->

  <!-- End middle slider --> 

    <!-- offer banner section -->
  

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