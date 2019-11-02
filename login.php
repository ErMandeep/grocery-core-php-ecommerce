<?php include('include/header.php'); ?>
<?php include('include/controller.php'); ?>

<?php
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
    header("location: index.php");
}

?>
<title>Login/Signup</title>


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
          <li class="home"> <a href="index.php" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="login.php" title="Go to Home Page"><strong>Login</strong></a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 

<?php register(); ?>



  <section class="main-container col1-layout">
    <div class="main container">
      <div class="account-login">
        <div class="page-title">
          <h2>Login or Create an Account</h2>
        </div>
        <fieldset class="col2-set">
          <legend>Login or Create an Account</legend>
          <div class="col-1 new-users"><strong>New Customers</strong>
            
            <form method="post">
            <div class="content">
              <!-- <p>Sign up </p> -->
              <ul class="form-list">
                <li>
                  <label for="email">Email Address <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="email">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="txtPassword" class="input-text required-entry validate-password" name="password">
                </li>
                <li>
                  <label for="pass">Confirm Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="txtConfirmPassword" class="input-text required-entry validate-password" >
                </li>
              </ul>
              <p class="required">* Required Fields</p>
             <div class="buttons-set">
                <button  class="button create-account" id="btnSubmit" type="submit" name="signup"><span>Create an Account</span></button>

              </div>
            </div>
            </form>

          </div>
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <form method="post">
            <div class="content">
              <p>If you have an account with us, please log in.</p>
              <ul class="form-list">
                <li>
                  <label for="email">Email Address <span class="required">*</span></label>
                  <br>
                  <input type="text" title="Email Address" class="input-text required-entry" id="email" value="" name="email">
                </li>
                <li>
                  <label for="pass">Password <span class="required">*</span></label>
                  <br>
                  <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="txtpassword">
                </li>
              </ul>
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="login" type="submit" class="button login"><span>Login</span></button>
                <a class="forgot-word" href="#">Forgot Your Password?</a> </div>
            </div>
          </form>
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
<?php include('include/footer_menu.php'); ?>
  <!-- End Footer --> 
</div>


<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
</body>
</html>