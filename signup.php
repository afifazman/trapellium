<?php

include("/connection/config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>UTM Thesis Printing Service</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/validation.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/conference">THEPRIS - Thesis Printing Service</a>
    </div>
  </div>
</nav>




<div class="container" ng-app="myapp">

	<form action="insert.php" id="myForm" name="myForm" class="form-horizontal" method="POST">

		<head1 align="center">Registration Form</head1>
		

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">First Name</label>  
			  <div class="col-md-5">
			  <input id="FirstName" name="FirstName" type="text" placeholder="Enter your first name here" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Last Name</label>  
			  <div class="col-md-5">
			  <input id="LastName" name="LastName" type="text" placeholder="Enter your last name here" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">National / Passport ID</label>  
			  <div class="col-md-5">
			  <input id="NRIC" name="NRIC" type="text" placeholder="Enter your national / password ID here" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Email</label>  
			  <div class="col-md-5">
			  <input id="email" name="email" type="text" placeholder="Enter your email address here" class="form-control input-md">
			  </div>
			</div>


			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Phone No.</label>  
			  <div class="col-md-5">
			  <input id="tel" name="tel" type="text" placeholder="Enter your phone number here" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Username</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="Enter your username (email) here" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>  
			  <div class="col-md-5">
			  <input id="password" name="password" type="password" placeholder="Enter your password here" class="form-control input-md" ng-model="formData.password" ng-minlength="8" ng-maxlength="20" ng-pattern="/(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/" required>
   			  <span ng-show="myForm.password.$error.required && myForm.password.$dirty"><font color="red">required</font></span>
   			  <span ng-show="!myForm.password.$error.required && (myForm.password.$error.minlength || myForm.password.$error.maxlength) && myForm.password.$dirty"><font color="red">Passwords must be between 8 and 20 characters.</font></span>
   			  <span ng-show="!myForm.password.$error.required && !myForm.password.$error.minlength && !myForm.password.$error.maxlength && myForm.password.$error.pattern && myForm.password.$dirty"><font color="red">Must contain one lower &amp; uppercase letter, and one non-alpha character (a number or a symbol.)</font></span>			  
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password_c">Confirm Password</label>  
			  <div class="col-md-5">
			  <input id="password_c" name="password_c" ng-model="formData.password_c" type="password" placeholder="Enter your password again here" class="form-control input-md" valid-password-c required>
   			  <span ng-show="myForm.password_c.$error.required && myForm.password_c.$dirty"><font color="red">Please confirm your password.</font></span>
   			  <span ng-show="!myForm.password_c.$error.required && myForm.password_c.$error.noMatch && myForm.password.$dirty"><font color="red">Passwords do not match.</font></span>
			  </div>
			</div>

			<input id="level" name="level" type="hidden" value="0">


			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label"></label>
			  <div class="col-md-8">
			    <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
			    <button id="reset" name="reset" type="reset" class="btn btn-primary">Reset</button>
			    <a href="index.php" class="btn btn-info" role="button">Back to Main</a>
			  </div>
			</div>

			<input type="hidden" name="level" id="level" value="staff">
		
		</form> <!-- /form -->

	

</div> <!-- ./container -->



</body>
</html>