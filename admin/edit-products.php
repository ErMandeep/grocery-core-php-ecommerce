<?php
include 'include/controller.php';
$session_username = $_SESSION['admin'];
if(empty($_SESSION['admin'])){
    header("location: login.php");
}
?>
<?php include('include/header.php');  ?>
			<!-- /Top Menu Items -->
			
<?php include('include/navigation.php');  ?>
			<!-- /Left Sidebar Menu -->
		
			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar nicescroll-bar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<form role="search">
												<div class="input-group mb-15">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
											<ul class="chat-list-wrap">
												<li class="chat-list">
													<div class="chat-body">
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">1pm</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user4.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
													</div>
												</li>
											</ul>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="panel panel-success card-view">
												<div class="panel-heading mb-20">
													<a class="goto-chat-list txt-light" href="javascript:void(0);"><i class="ti-angle-left"></i></a>
													<div class="text-center">
														<h6 class="panel-title txt-light">Alan Gilchrist</h6>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body">
														<div class="chat-content">
															<ul>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																		<div class="msg pull-left">A forest is a large area of land covered with trees
																			<div class="msg-per-detail mt-5">
																				<span class="msg-per-name pr-5 txt-success">ryan</span>
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Provide ecosystem...
																			<div class="msg-per-detail mt-5">
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																		<div class="msg pull-left"> Account for 75% of the gross primary productivity of them Earth's biosphere
																			<div class="msg-per-detail mt-5">
																				<span class="msg-per-name pr-5 txt-success">ryan</span>
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>	
																</li>
															</ul>
														</div>
														<div class="input-group">
															<div class="input-group-btn">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-smile-o"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															
															<input type="text" id="input_msg_send" name="send-msg" class="form-control" placeholder="Type something">
															<div class="input-group-btn">
																<div class="fileupload btn  btn-default"><i class="fa fa-paperclip"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div id="messages_tab" class="tab-pane fade" role="tabpanel">
									<div class="message-box-wrap">
										<div class="streamline message-box">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">12/10/16</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">2pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
									<div class="todo-box-wrap">
										<!-- Todo-List -->
										<ul class="todo-list">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox01"/>
													<label for="checkbox01">Record The First Episode Of HTML Tutorial</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox02"/>
													<label for="checkbox02">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox03" checked/>
													<label for="checkbox03">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox04" checked/>
													<label for="checkbox04">Prepare For The Next Project</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox05" checked/>
													<label for="checkbox05">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox06" checked/>
													<label for="checkbox06">Finish Infinity Project</label>
												</div>
											</li>
										</ul>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /Right Sidebar Menu -->


			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg bg-pink">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">add-products</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-products</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
				
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
$market_price = $row['market_price'];


}

			 ?>



					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="#"  method="post" enctype="multipart/form-data">
												<h6 class="txt-dark capitalize-font"><i class="icon-list mr-10"></i>about product</h6>
												<hr>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Name</label>
															<input type="text" id="firstName" name="product_name" class="form-control" value="<?php echo $product_name; ?>" placeholder="Rounded Chair">
														</div>
													</div>
													
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category</label>
															<select class="form-control" name="product_category_id" data-placeholder="Choose a Category" tabindex="1">
																<?php 
												                           $query = "SELECT * FROM category";
												                        $select_image = mysqli_query($connection, $query); 
												                      while($row = mysqli_fetch_assoc($select_image)){
												                          $id = $row['id'];
												                          $cat_title = $row['cat_title'];
												                 ?>
		<option value="<?php echo $cat_title; ?>" <?php if($product_category_id==$cat_title) echo 'selected="selected"'; ?>><?php echo $cat_title; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>
												
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Mraket price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" name="market_price" class="form-control" id="exampleInputuname" value="<?php echo $market_price; ?>">
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" name="price" class="form-control" id="exampleInputuname" value="<?php echo $price; ?>">
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Quantity</label>
															<div class="input-group">
																<input type="number" name="product_quantity" class="form-control" id="exampleInputuname" value="<?php echo $product_quantity; ?>" placeholder="5">
															</div>
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="icon-speech mr-10"></i>Product Description</h6>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea name="description" class="form-control" rows="4"><?php echo $description; ?></textarea>
														</div>
													</div>
												</div>
												
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="icon-picture mr-10"></i>Featured image</h6>
												<hr>
												<div class="row">
													<div class="col-lg-12">
														<div class="img-upload-wrap">
															<img id="blah" style="height: 225px;" src="images/<?php echo $featured_img; ?>" alt="upload_img"> 
															<!-- <img id="blah" style="height: 225px;"/> -->
														</div>
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload</span>
															<input type="file" class="upload" name="featured_img" id="imgInp" >
															<!-- <input type="file" name="image" id="imgInp" class="upload-profile-input"> -->

														</div>
													</div>
												</div>


												<h6 class="txt-dark capitalize-font"><i class="icon-picture mr-10"></i>upload image (select 3 images) </h6>
												<hr>
												<div class="row">
													<div class="col-lg-12">
<?php 
$query2 = query(" SELECT * FROM images WHERE productID = " . escape_string($_GET['id']) . " ");

// $query = query("SELECT * FROM products INNER JOIN images ON products.id = images.productID");
confirm($query2);
$image_count = mysqli_num_rows($query2); 

while($row = fetch_array($query2)) {

      $id_img = $row['id'];
      $img = $row['image'];


 ?>					
													<div class="col-lg-4">
														<!-- <div class="img-upload-wrap"> -->
															<img style="height: 225px; width: 300px;" src="data:image/jpeg;base64,<?php echo base64_encode($img); ?>" alt="upload_img"> 
															<a href="edit-products.php?id=<?php echo $productID; ?>&delete=<?php echo $id_img; ?>">Remove</a> 
														<!-- </div> -->
													</div>	
<?php } ?>


<!-- update images query -->

 <!-- /update images query -->  


<!-- Delete image -->
  <?php 
    if(isset($_GET['delete'])){

             $delete_cat = $_GET['delete'];
             $delete_query_img = "DELETE  FROM images WHERE id = $delete_cat";
             $delete_query = mysqli_query($connection, $delete_query_img);
             if($delete_query){
             	header ("Location: edit-products.php?id=" . escape_string($_GET['id']) . "");
         }   
         }
   ?>
<!-- /Delete image -->
														
													</div>
													<br>
										
												<div class="seprator-block"></div>
												<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Select images</span>
														<input type="file" class="upload" name="image[]" >
														</div>	
														<button type="submit" name="updateimg" class="btn  btn-primary">Upload Images </button>		
												</div>
												<hr>
									<?php product_image_update(); ?>			
											
												<div class="form-actions">
													<input type="submit" name="update" class="btn btn-success btn-icon left-icon mr-10" value="save">
													
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->


<?php update_product(); ?>
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30"> 
					<div class="row">
						<div class="col-sm-5">
							<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
							<ul class="footer-link nav navbar-nav">
								<li class="logo-footer"><a href="#">help</a></li>
								<li class="logo-footer"><a href="#">terms</a></li>
								<li class="logo-footer"><a href="#">privacy</a></li>
							</ul>
						</div>
						<div class="col-sm-7 text-right">
							<p>2016 &copy; Kenny. Pampered by Hencework</p>
						</div>	
					</div>	
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>

				<!-- Form Flie Upload Data JavaScript -->
		<script src="dist/js/form-file-upload-data.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>

		<script type="text/javascript">

		function readURL(input) {

		if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
		$('#blah').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
		}
		}

		$("#imgInp").change(function() {
		readURL(this);
		});
		</script>


		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="dist/js/modal-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>

<!-- Mirrored from hencework.com/theme/kenny/add-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 09:54:01 GMT -->
</html>


