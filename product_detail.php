<?php include('include/header.php'); ?>

<title>Product Details</title>
<style>
.nn{
    padding: 11px 38px 12px 37px;
    line-height: 40px;
    background-color: #ffffff;
    color: #111433;
    border-radius: 0px;
  }
</style>
<?php include('include/cart.php'); ?>

<?php include('include/menu.php'); ?>

<?php submitreview(); ?>

  <!-- end breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="index.php" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="#" title="Go to Home Page">Product-details</a><span>&mdash;›</span></li>
          <li class="category13"><strong> Sample Product </strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 
  <!-- main-container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">
              <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                  <ul class="moreview" id="moreview">


<?php 

$query = query(" SELECT * FROM products WHERE id = " . escape_string($_GET['id']) . " ");


$productID = $_GET['id'];

// $query = query("SELECT * FROM products INNER JOIN images ON products.id = images.productID");
confirm($query);

while($row = fetch_array($query)) {

$product_name = $row['product_name'];
$product_category_id = $row['product_category_id'];
$price = $row['price'];
$description = $row['description'];
$featured_img = $row['featured_img'];
$product_quantity = $row['product_quantity'];
$id = $row['id'];


}


$query = query(" SELECT * FROM images WHERE productID = " . escape_string($_GET['id']) . " ");


$productID = $_GET['id'];

// $query = query("SELECT * FROM products INNER JOIN images ON products.id = images.productID");
confirm($query);

while($row = fetch_array($query)) {
    $id_img = $row['id'];
      $img = $row['image'];

 ?>


                    <li class="moreview_thumb thumb_1"> <img class="moreview_thumb_image" src="data:image/jpeg;base64,<?php echo base64_encode($img); ?>" alt="thumbnail"> <img class="moreview_source_image" src="data:image/jpeg;base64,<?php echo base64_encode($img); ?>" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="data:image/jpeg;base64,<?php echo base64_encode($img); ?>" alt="thumbnail"></li>

                    <!-- <li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="products-images/product1.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="images/product4.jpg" alt="thumbnail"></li> -->

                    <!-- <li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="products-images/product1.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li> -->

                    <!-- <li class="moreview_thumb thumb_4"> <img class="moreview_thumb_image" src="products-images/product1.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li> -->

                    <!-- <li class="moreview_thumb thumb_5"> <img class="moreview_thumb_image" src="products-images/product1.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li> -->

                    <!-- <li class="moreview_thumb thumb_6"> <img class="moreview_thumb_image" src="products-images/product1.jpg" alt="thumbnail"> <img class="moreview_source_image" src="products-images/product1.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img  class="zoomImg" src="products-images/product1.jpg" alt="thumbnail"></li> -->
                
<?php } ?>

                  </ul>
                  <div class="moreview-control"> <a href="javascript:void(0)" class="moreview-prev"></a> <a href="javascript:void(0)" class="moreview-next"></a> </div>
                </div>
                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                  <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                  <div class="product-name">
                    <h1><?php echo $product_name; ?></h1>
                  </div>
                  <div class="ratings">
                    <div class="rating-box">
                      

         <?php 
            $query = "SELECT * FROM rating WHERE productID = " . escape_string($_GET['id']) . "";
            $sql = mysqli_query($connection, $query);
            $totalrow = mysqli_num_rows($sql);
            $query = "SELECT SUM(overall_rating) AS overall_rating FROM rating WHERE productID = " . escape_string($_GET['id']) . "";
            $result = mysqli_query($connection,$query); 
            $row = mysqli_fetch_assoc($result); 
            $sum = $row['overall_rating'];
            // echo $sum;

            $total = $sum/$totalrow;

            $avg = round($total);

                  ?>
                  <div class="rating<?php echo $avg; ?>"></div>
                    </div>
                    <p class="rating-links"> <a href="#"><?php echo $totalrow; ?> Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                  </div>
                  <p class="availability in-stock">Availability: 
                    <?php if($product_quantity == 0): ?>
                    <span>Out stock</span>
                  <?php endif; ?>
                  <?php if($product_quantity > 0): ?>
                    <span>In stock</span>
                    <?php endif; ?>
                    </p>
                  <div class="price-block">
                    <div class="price-box">
                      <!-- <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p> -->
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Rs. <?php echo $price; ?> </span> </p>
                    </div>
                  </div>
                  <div class="short-description">
                    <h2>Quick Overview</h2>
                    <p><?php echo $description; ?>.</p>
                  </div>
                  <div class="add-to-box">
                    <div class="add-to-cart">
                      <label for="qty">Quantity:</label>
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onClick="var result = document.getElementById('quantity<?php echo $id; ?>'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                          <input type="text" class="input-text qty"  title="Qty" value="1" maxlength="12" id="quantity<?php echo $id; ?>" name="quantity">
                          <button onClick="var result = document.getElementById('quantity<?php echo $id; ?>'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        </div>

                      </div>
                       <?php if($product_quantity > 0): ?>
                    <input type="hidden" name="quantity" id="quantity<?php echo $id; ?>" value="1">
                  <input type="hidden" name="hidden_name" id="name<?php echo $id; ?>" value="<?php echo $product_name; ?>" />
                  <input type="hidden" name="hidden_price" id="price<?php echo $id; ?>" value="<?php echo $price; ?>" />
                  <input type="hidden" name="featured_img" id="featured_img<?php echo $id; ?>" value="<?php echo $featured_img; ?>" />


                  <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail add_to_cart" name="add_to_cart" id="<?php echo $id; ?>">


                      <button class="button btn-cart add_to_cart" name="add_to_cart" title="Add to Cart" type="button" id="<?php echo $id; ?>"><span><i class="icon-basket"></i> Add to Cart</span></button>

                     <!-- <a href="shopping_cart.php?add=<?php echo $id; ?>" class="button btn-cart"><span><i class="icon-basket"></i> Add to Cart</span></a> -->
                       <?php endif; ?>
                      <div class="email-addto-box">
                        <ul class="add-to-links">
                          <li> <a class="link-wishlist" href="http://bit.do/bromq"><span>Add to Wishlist</span></a></li>
                          <!-- <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li> -->
                        </ul>
                        <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      </div>
                    </div>
                  </div>
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
              </form>
            </div>
            <div class="product-collateral">
              <div class="col-sm-12 wow bounceInUp animated">
                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                  <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                  <!-- <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li> -->
                  <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                  <!-- <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li> -->
                  <!-- <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li> -->
                </ul>
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      <?php echo $description; ?>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_tags">
                    <div class="box-collateral box-tags">
                      <div class="tags">
                        <form id="addTagForm" action="#" method="get">
                          <div class="form-add-tags">
                            <label for="productTagName">Add Tags:</label>
                            <div class="input-box">
                              <input class="input-text required-entry" name="productTagName" id="productTagName" type="text" >
                              <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                            </div>
                            <!--input-box--> 
                          </div>
                        </form>
                      </div>
                      <!--tags-->
                      <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="reviews_tabs">
                    <div class="box-collateral box-reviews" id="customer-reviews">
                      <div class="box-reviews1">
                        <div class="form-add">
                         <form method="post" enctype="multipart/form-data"> 
                            <h3>Write Your Own Review</h3>
                            <fieldset>
                              <h4>How do you rate this product? <em class="required">*</em></h4>
                              <span id="input-message-box"></span>
                              <table id="product-review-table" class="data-table">
                                
                                <thead>
                                  <tr class="first last">
                                    <th>&nbsp;</th>
                                    <th><span class="nobr">1 *</span></th>
                                    <th><span class="nobr">2 *</span></th>
                                    <th><span class="nobr">3 *</span></th>
                                    <th><span class="nobr">4 *</span></th>
                                    <th><span class="nobr">5 *</span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="first odd">
                                    <th>Price</th>
                                    <td class="value"><input type="radio" class="radio" value="1" id="Price_1" name="price_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="2" id="Price_2" name="price_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="3" id="Price_3" name="price_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="4" id="Price_4" name="price_rating" required></td>
                                    <td class="value last"><input type="radio" class="radio" value="5" id="Price_5" name="price_rating" required></td>
                                  </tr>
                                  <tr class="even">
                                    <th>Value</th>
                                    <td class="value"><input type="radio" class="radio" value="1" id="Value_1" name="value_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="2" id="Value_2" name="value_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="3" id="Value_3" name="value_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="4" id="Value_4" name="value_rating" required></td>
                                    <td class="value last"><input type="radio" class="radio" value="5" id="Value_5" name="value_rating" required></td>
                                  </tr>
                                  <tr class="last odd">
                                    <th>Quality</th>
                                    <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="quality_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="quality_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="quality_rating" required></td>
                                    <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="quality_rating" required></td>
                                    <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="quality_rating" required></td>
                                  </tr>
                                </tbody>
                              </table>
                              <input type="hidden" value="" class="validate-rating" name="validate_rating">
                              <div class="review1">
                                <ul class="form-list">
                                  <li>
                                    <label class="required" for="nickname_field">Nickname<em>*</em></label>
                                    <div class="input-box">
                                      <input type="text" class="input-text required-entry" id="nickname_field" name="nickname"  required>
                                    </div>
                                  </li>
                                  <li>
                                    <label class="required" for="summary_field">Summary<em>*</em></label>
                                    <div class="input-box">
                                      <input type="text" class="input-text required-entry" id="summary_field" name="summary"  required>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="review2">
                                <ul>
                                  <li>
                                    <label class="label-wide" for="review_field">Review<em>*</em></label>
                                    <div class="input-box">
                                      <textarea class="required-entry" rows="3" cols="5" id="review_field" name="review"  required></textarea>
                                    </div>
                                  </li>
                                </ul>
                                <div class="buttons-set">
                                  <!-- <button class="button submit" title="Submit Review" type="submit" name="review"><span>Submit Review</span></button> -->
                                   <input type="submit" class="button submit" name="submitreview" value="Submit Review">

                               
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                      <div class="box-reviews2">
                        <h3>Customer Reviews</h3>
                        <div class="box visible">
                          <ul>


<?php 



$query = query(" SELECT * FROM rating WHERE productID = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$review = $row['review'];  
$summary = $row['summary'];  
$nickname = $row['nickname'];  
$price_rating = $row['price_rating'];  
$value_rating = $row['value_rating'];  
$quality_rating = $row['quality_rating'];  

$dtt = $row['date'];

 ?>


                            <li>
                              <table class="ratings-table">
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating<?php echo $value_rating; ?>"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating<?php echo $quality_rating; ?>"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating<?php echo $price_rating; ?>"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="#"><?php echo $summary; ?> </a></h6>
                                <small>Review by <span><?php echo $nickname; ?>  </span>on <?php echo time_elapsed_string($dtt); ?>  </small>
                                <div class="review-txt"> <?php echo $review; ?> </div>
                              </div>
                            </li>


             <?php } ?>               
                            <!-- <li class="even">
                              <table class="ratings-table">
                                
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="#/catalog/product/view/id/60/">Amazing</a></h6>
                                <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                                <div class="review-txt"> Minimalism is the online ! </div>
                              </div>
                            </li> -->
                            <!-- <li>
                              <table class="ratings-table">
                                
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class="rating-box">
                                        <div class="rating"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="review">
                                <h6><a href="#/catalog/product/view/id/59/">Nicely</a></h6>
                                <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                                <div class="review-txt"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                              </div>
                            </li> -->
                          </ul>
                        </div>
                        <!-- <div class="actions"> <a class="button view-all" id="revies-button"><span><span>View all</span></span></a> </div> -->
                      </div>
                      <div class="clear"></div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_custom">
                    <div class="product-tabs-content-inner clearfix">
                      <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when 
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It 
                        was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem 
                        Ipsum.</span></p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="product_tabs_custom1">
                    <div class="product-tabs-content-inner clearfix">
                      <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem     
                        
                        Lorem Ipsumis
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when 
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It 
                        was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem 
                        Ipsum.</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="box-additional">
                  <div class="related-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                      <div class="new_title center">
                        <h2>Related Products</h2>
                      </div>
                      <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4"> 
                          


<?php best_seller_products(); ?>                          
                 
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="upsell-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                      <div class="new_title center">
                        <h2>Upsell Products</h2>
                      </div>
                      <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4"> 
                          
                         
                          
                       <?php best_seller_products(); ?>     
                        
                          
                          
                        
                         
                          
                        
                          
                         
                          
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End main-container --> 
  <!--Footer -->
<?php include('include/footer_menu.php'); ?>
  <!-- End Footer --> 
</div>


<?php 

 // if(isset($_GET['add'])) {

 //  $_SESSION['user_name'] = "product";

 //    redirect("shopping_cart.php");
 // }
 ?>



<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript" src="js/cloudzoom.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>




        <script src="js2/main.js"></script> <!-- Resource jQuery -->
<script src="js2/jquery.menu-aim.js"></script> <!-- menu aim -->
<?php include('include/footer.php'); ?>

</body>
</html>