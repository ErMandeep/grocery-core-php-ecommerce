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
			

		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg  bg-blue">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-light">invoice</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Dashboard</a></li>
								<li><a href="#"><span>special pages</span></a></li>
								<li class="active"><span>invoice</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					<!-- Row -->


					<?php 
					if($connection){
						echo "111111111"; 
					}

					 ?>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Invoice</h6>
									</div>
									<div class="pull-right">
										<h6 class="txt-dark">Order # 12345</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-6">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">Billed to:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Fasbook, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(133) 456-7890
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">shiped to:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Xyz, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(123) 456-7890
												</address>
											</div>
										</div>
										
										<div class="row">
											<div class="col-xs-6">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">Payment Method:</span>
													<br>
													Visa ending **** 4242<br>
													jsmith@email.com
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">order date:</span><br>
													March 7, 2017<br><br>
												</address>
											</div>
										</div>
										
										<div class="seprator-block"></div>
										
										<div class="invoice-bill-table">
											<div class="table-responsive">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Item</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Totals</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>BS-200</td>
															<td>$10.99</td>
															<td>1</td>
															<td>$10.99</td>
														</tr>
														<tr>
															<td>BS-400</td>
															<td>$20.00</td>
															<td>3</td>
															<td>$60.00</td>
														</tr>
														<tr>
															<td>BS-1000</td>
															<td>$600.00</td>
															<td>1</td>
															<td>$600.00</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Subtotal</td>
															<td>$670.99</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Shipping</td>
															<td>$15</td>
														</tr>
														<tr class="txt-dark">
															<td></td>
															<td></td>
															<td>Total</td>
															<td>$685.99</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="pull-right">
												<button type="submit" class="btn btn-primary mr-10">
													Proceed to payment 
												</button>
												<button type="button" class="btn btn-success btn-outline btn-icon left-icon" onclick="javascript:window.print();"> 
													<i class="fa fa-print"></i><span> Print</span> 
												</button>
											</div>
											<div class="clearfix"></div>
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
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>

<!-- Mirrored from hencework.com/theme/kenny/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 09:54:59 GMT -->
</html>