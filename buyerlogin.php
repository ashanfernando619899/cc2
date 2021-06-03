<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/buyer.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">


  <title>CarMart</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>


  <header class="">
  <nav class="navbar navbar-expand-lg">

      <div class="container">
      <a class="navbar-brand" href="index.html"><h2>Car<em>Mart</em></h2></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                  </a>
              </li>

              <li class="nav-item"><a class="nav-link" href="buyerlogin.php">Login as Buyer</a></li>
              <li class="nav-item"><a class="nav-link" href="login.php">Login as Seller</a></li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="team.html">Team</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    <a class="dropdown-item" href="terms.html">Terms</a>
                  </div>
              </li>



              <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

          </ul>

        </div>
      </div>
    </nav>
  </header>


<body>

<center>



</center>

<br>
<br>
<br>
<br>
<br>
<br>







<HTML>
<HEAD>
<TITLE>Buyer Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="buyerregister.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Buyer Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Username<span class="required error" id="username-info"></span>
							</div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Password<span class="required error" id="login-password-info"></span>
							</div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>

          <a href="adminlogin.php">Im an Admin?</a>
				</form>
			</div>
		</div>
	</div>

  <script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>

</BODY>
</HTML>
