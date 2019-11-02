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
					<div class="row heading-bg bg-yellow">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">modals</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>ui-elements</span></a></li>
							<li class="active"><span>modals</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
				<div class="row">
						
						<div class="col-md-12">
							<div class="panel panel-default card-view">
							<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Category List</h6>
									</div>
									<div class="clearfix"></div>
<hr>
<form method="post" enctype="multipart/form-data" >
<div class="box box-success">

<div class="box-body">

<!-- <label for="productname"> Category Name </label> -->
<input class="form-control" type="text" id="productname" name="cat_title" placeholder="Category Name">

<br>
<button type="submit" class="btn  btn-primary" name="add_category"> Create </button>
</div>

</div>
</form>


<?php add_category(); ?>
								</div>
								</div>
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Row -->
					<div class="row">
						
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								
								<div  class="panel-wrapper collapse in">
									<div  class="panel-body">
										
										<div class="button-list mt-25">
											
											
										

 <div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<!-- <form class="form-horizontal" role="form"> -->
														

														<div class="form-body">
															
															<div class="row">



																<div class="col-md-8">
																	<center>
																	<div class="form-group">
																		<label class="control-label col-md-4"><b style="float: left;">Category Name</b></label>
																		<br>
																	</div>
																	</center>
																</div>
																
																<div class="col-md-4">
																	<div class="form-group">
																		<center>
																		<label class="control-label col-md-8">Action</label>
																		</center>
																	</div>
																</div>

<?php 
           $query = "SELECT * FROM category";
        $select_image = mysqli_query($connection, $query); 
            
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['cat_id'];
          $cat_title = $row['cat_title'];
          
 ?>

															
															<div class="col-md-8">
																	<div class="form-group">
																		<br>
																		<label class="control-label col-md-4"><?php echo $cat_title; ?></label>
																	</div>
																</div>
																
																<div class="col-md-4">
																	<div class="form-group">
																		<div class="col-md-offset-3 col-md-9">
																			<center>
																			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $id; ?>" data-whatever="">Edit</button>
																			<button type="button" class="btn btn-default delete" id=" <?php echo $id; ?> ">Delete</button>
																			</center>
																		</div>
																	</div>
																</div>	


						<!-- edit modal	-->
											<div class="modal fade" id="edit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="edit<?php echo $id; ?>">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h5 class="modal-title" id="edit<?php echo $id; ?>">Edit Category Name</h5>
													</div>
													<div class="modal-body">
														<form method="post" enctype="multipart/form-data">
															<div class="form-group">
																<label for="recipient-name" class="control-label mb-10"> </label>
																<input type="hidden" name="edit_id" value="<?php echo $id; ?>">
																<input type="text" class="form-control" name="cat_title" value=" <?php echo $cat_title; ?> ">
															</div>
															
													</div>
													<div class="modal-footer">
														<button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="submit" name="edit" class="btn btn-primary">Save</button>
													</div>
														</form>
												</div>
											</div>
										</div>					




   <!-- edit query -->
                      <?php 
    if(isset($_POST['edit'])){

              $cat_title = $_POST['cat_title'];

             $edit_cat_id = $_POST['edit_id'];
             $edit_cat_query = "UPDATE category SET cat_title= '$cat_title' WHERE cat_id=$edit_cat_id ";
             $edit_query = mysqli_query($connection, $edit_cat_query);
             header ("Location: category.php");
         }      
   ?>

<?php } ?>

																<!--/span-->
															</div>
															
															</div>
															
															<!-- /Row -->
															
														</div>
														<!-- <div class="form-actions mt-10">
															<div class="row">
																<div class="col-md-6">
																	<div class="row">
																		<div class="col-md-offset-3 col-md-9">
																			<button type="submit" class="btn btn-info btn-icon left-icon  mr-10"> <i class="fa fa-pencil"></i> <span>Edit</span></button>
																			<button type="button" class="btn btn-default">Cancel</button>
																		</div>
																	</div>
																</div>
																<div class="col-md-6"> </div>
															</div>
														</div> -->


													<!-- </form> -->
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
						</div>
					</div>
					<!-- /Row -->
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30"> 
					<div class="row">
						<div class="col-sm-5">
							<a href="index.php" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
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
		
		<script src="dist/js/modal-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>


		<script type="text/javascript">
	
   $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   var $ele = $(this).parent().parent();
   if(confirm("Are you sure you want to remove this?"))
   {

$.ajax({
    type:'POST',
    url:'category-delete.php',
    data:{id:id},
    success: function(data){
       window.location.reload(true);
    }

     });
    // setInterval(function(){
    //  $('#alert_message').html('');
    // }, 5000);
   }
  });
</script>

<?php include('include/footer.php');  ?>
		
	</body>

</html>