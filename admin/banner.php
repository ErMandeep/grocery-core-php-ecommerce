<?php
include 'include/controller.php';
$session_username = $_SESSION['admin'];
if(empty($_SESSION['admin'])){
    header("location: login.php");
}
?>
<?php include('include/header.php'); ?>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
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
					<div class="row heading-bg bg-blue">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">carousel</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>UI element</span></a></li>
							<li class="active"><span>carousel</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
			<!-- sliders		 -->
<?php 
  
         $query = "SELECT * FROM slider WHERE id = 1";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $id = $row['id'];
          $slider1 = $row['slider1'];
          $slider2 = $row['slider2'];
          $slider3 = $row['slider3'];


if(isset($_POST['submitimg'])){



//  slider first image update query
if($_FILES['slider1']['name'] != ""){    

        $img1 = pathinfo($_FILES["slider1"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["slider1"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE slider SET slider1 = '$name1' WHERE id=1";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        
// slider second image update query
        if($_FILES['slider2']['name'] != ""){    

        $img1 = pathinfo($_FILES["slider2"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["slider2"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE slider SET slider2 = '$name1' WHERE id=1";
        $update_img2 = mysqli_query($connection, $imagesql);

        }

        // slider third image update query
        if($_FILES['slider3']['name'] != ""){    

        $img1 = pathinfo($_FILES["slider3"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["slider3"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE slider SET slider3 = '$name1' WHERE id=1";
        $update_img3 = mysqli_query($connection, $imagesql);

        }
        if($update_img1 || $update_img2 || $update_img3){
          header('Location: banner.php');
        }

        }

}

 ?>			

			<!-- sliders		 -->
					
					
					<!-- /Row -->
					
				
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">

					   <div class="col-lg-8">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Front Slider</h6>
									</div>
									<div class="clearfix"></div>
								</div>
			<form method="post" enctype="multipart/form-data" >					
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											<div id="owl_demo_3" class="owl-carousel owl-theme">

											   <div class="item"><img src="images/<?php echo $slider1; ?>" alt="Owl Image">
											   	<input type="file" name="slider1" class="upload">
											   </div>
											   <div class="item"><img src="images/<?php echo $slider2; ?>" alt="Owl Image">
											   	<input type="file" name="slider2" class="upload">
											   </div>
											   <div class="item"><img src="images/<?php echo $slider3; ?>" alt="Owl Image">
											   	<input type="file" name="slider3" class="upload">
											   </div>
											
											</div>
										 </div>
									</div>
								</div>
<!-- 	<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload">

	</div>	 -->							
			 <input type="submit" class="btn btn-success" name="submitimg" value="UPDATE">
							</div>	

					</form>		

						</div>

					   <div class="col-lg-4">
							<div class="panel panel-default card-view">
								<!-- <div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Front Slider</h6>
									</div>
									<div class="clearfix"></div>
								</div> -->
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											
											<!-- <div id="owl_demo_3" class="owl-carousel owl-theme"> -->

<?php 
         $query = "SELECT * FROM banner WHERE id = 1";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner1 = $row['image'];
}

if(isset($_POST['banner1'])){



//  slider first image update query
if($_FILES['banner1']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner1"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner1"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=1";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }



 ?>
											   <img src="images/<?php echo $banner1; ?>" alt="Owl Image" style="width: 300px;" >
											
											<!-- </div> -->
										 </div>
									</div>
								</div>
				<form method="post" enctype="multipart/form-data" >	
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner1">

							</div>								
							 <input type="submit" class="btn btn-success" name="banner1" value="UPDATE">
							</div>	
</form>
							

						</div>						
					</div>

<!-- banner  -->
<?php 
         $query = "SELECT * FROM banner WHERE id = 2";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner2 = $row['image'];
}

if(isset($_POST['banner2'])){



//  slider first image update query
if($_FILES['banner2']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner2"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner2"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=2";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }



 ?>
					<div class="row">
						<div class="col-lg-4">
<?php 
         $query = "SELECT * FROM banner WHERE id = 3";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner3 = $row['image'];
}

if(isset($_POST['banner3'])){



//  slider first image update query
if($_FILES['banner3']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner3"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner3"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=3";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }



 ?>			

 <?php 
         $query = "SELECT * FROM banner WHERE id = 4";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner4 = $row['image'];
}

if(isset($_POST['banner4'])){



//  slider first image update query
if($_FILES['banner4']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner4"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner4"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=4";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }


 ?>		
 <?php 
         $query = "SELECT * FROM banner WHERE id = 5";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner5 = $row['image'];
}

if(isset($_POST['banner5'])){



//  slider first image update query
if($_FILES['banner5']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner5"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner5"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=5";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }


 ?>		

 <?php 
         $query = "SELECT * FROM banner WHERE id = 6";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner6 = $row['image'];

}
if(isset($_POST['banner6'])){



//  slider first image update query
if($_FILES['banner6']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner6"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner6"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=6";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }



 ?>						
	
<?php 
         $query = "SELECT * FROM banner WHERE id = 7";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner7 = $row['image'];

}
if(isset($_POST['banner7'])){



//  slider first image update query
if($_FILES['banner7']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner7"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner7"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=7";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }


 ?>		

 <?php 
         $query = "SELECT * FROM banner WHERE id = 8";
        $select_image = mysqli_query($connection, $query); 
            
       while($row = mysqli_fetch_assoc($select_image)){
          
          $banner8 = $row['image'];

}
if(isset($_POST['banner8'])){



//  slider first image update query
if($_FILES['banner8']['name'] != ""){    

        $img1 = pathinfo($_FILES["banner8"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["banner8"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE banner SET image = '$name1' WHERE id=8";
        $update_img1 = mysqli_query($connection, $imagesql);

        }

        if($update_img1){
          header('Location: banner.php');
        }

        }


 ?>		
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											   <img src="images/<?php echo $banner2; ?>" alt="Owl Image" style="width: 300px;" >
										 </div>
									</div>
								</div>
				<form method="post" enctype="multipart/form-data" >							
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner2">

							</div>								
							<input type="submit" class="btn btn-success" name="banner2" value="UPDATE">
							</div>	
						</form>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											   <img src="images/<?php echo $banner3; ?>" alt="Owl Image" style="width: 300px;" >
										 </div>
									</div>
								</div>
										<form method="post" enctype="multipart/form-data" >	
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner3">

							</div>								
							<input type="submit" class="btn btn-success" name="banner3" value="UPDATE">
							</div>	
						</form>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											   <img src="images/<?php echo $banner4; ?>" alt="Owl Image" style="width: 300px;" >
										 </div>
									</div>
								</div>
					<form method="post" enctype="multipart/form-data" >	
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner4">

							</div>								
							<input type="submit" class="btn btn-success" name="banner4" value="UPDATE">
							</div>	
						</form>
						</div>													
					</div>


<!-- banner  -->

<div class="row">
<div  class="panel-body">
<div class="">
<center><img src="images/<?php echo $banner5; ?>" alt="Owl Image" style="height: 149px;width: 1140px;" ></center>
 </div>
 		<form method="post" enctype="multipart/form-data" >	
 		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner5">

							</div>								
						<input type="submit" class="btn btn-success" name="banner5" value="UPDATE">
					</form>
</div>	


</div>
<!-- banner  -->

<!-- banner  -->
					<div class="row">
						<div class="col-lg-4">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											   <img src="images/<?php echo $banner6; ?>" alt="Owl Image" style="width: 300px;" >
										 </div>
									</div>
								</div>
			<form method="post" enctype="multipart/form-data" >								
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner6">

							</div>								
					<input type="submit" class="btn btn-success" name="banner6" value="UPDATE">
							</div>	
				</form>			
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											   <img src="images/<?php echo $banner7; ?>" alt="Owl Image" style="width: 300px;" >
										 </div>
									</div>
								</div>
				<form method="post" enctype="multipart/form-data" >							
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner7">

							</div>								
						<input type="submit" class="btn btn-success" name="banner7" value="UPDATE">
							</div>	
			</form>				
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div  class="panel-body">
										<div class="">
											   <img src="images/<?php echo $banner8; ?>" alt="Owl Image" style="width: 300px;" >
										 </div>
									</div>
								</div>

					<form method="post" enctype="multipart/form-data" >						
		<div class="fileupload btn btn-primary btn-anim  mt-30 mb-30"><i class="fa fa-upload"></i><span class="btn-text">Upload files</span>
					<input type="file" class="upload" name="banner8">

							</div>								
					<input type="submit" class="btn btn-success" name="banner8" value="UPDATE">
							</div>	
					</form>		
						</div>													
					</div>

<!-- banner  -->






					<!-- /Row -->
					
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
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
			
		<!-- Owl Init JavaScript -->
		<script src="dist/js/owl-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>

</html>