<?php


session_start();

include('connection/config.php');

if(!isset($_SESSION['username']) || $_SESSION['username'] == " ")
{
       header("Location: index.php");
       die();
}

$NRIC = $_SESSION['NRIC'];


//sql query for staff PERSONAL DETAIL
$sql = "SELECT * FROM personal, login WHERE login.NRIC='$NRIC' AND login.NRIC=personal.NRIC";

$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>THEPRIS - Thesis Printing Service</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="assets/css/styles2.css" rel="stylesheet">
        <link href="assets/css/mystyle.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
	</head>


<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>     
                    <a role="button" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION['username']; ?> </a> 
                </li>
                <li>
                    <a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
	    
	<div class="row">	

			<!-- Menu  -->
	        <div class="col-sm-2">
	            <!-- Left column -->
	            <h4>Menu</h4>


	                    <ul class="nav nav-stacked" id="userMenu">
	                        <li><a href="main.php"><i class="glyphicon glyphicon-home"></i> Profile</a></li>
	                        <li><a href="new-order.php"><i class="glyphicon glyphicon-book"></i> New Order </a></li>
	                        <li><a href="order-list.php"><i class="glyphicon glyphicon-stats"></i> My Order </a></li>

	                        <?php

	                        	if ($_SESSION['level']=="1")
	                        	{

	                        		echo "<li><a href='admin.php'><i class='glyphicon glyphicon-check'></i> Admin</a></li>";

	                        	}

	                        ?>

	                    </ul>
	                </li>

	        </div>


			<!-- Main  -->
	        <div class="col-sm-9">
	            <!-- column 2 -->
	            <div class="row">

	                <div class="col-md-12">

	                    <div class="panel panel-invisible">

							<h4><b>Profile</b></h4>

							<form action="update.php" id="myForm" name="myForm" class="form-horizontal" method="POST">

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label">First Name</label>  
								  <div class="col-md-5">
								  <input id="FirstName" name="FirstName" type="text" value='<?php echo $row['FirstName']; ?>' class="form-control input-md">
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label">Last Name</label>  
								  <div class="col-md-5">
								  <input id="LastName" name="LastName" type="text" value='<?php echo $row['LastName']; ?>' class="form-control input-md">
								  </div>
								</div>

								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label">Email</label>  
								  <div class="col-md-5">
								  <input id="email" name="email" type="text" value='<?php echo $row['email']; ?>' class="form-control input-md">
								  </div>
								</div>


								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label">Phone No.</label>  
								  <div class="col-md-5">
								  <input id="tel" name="tel" type="text" value='<?php echo $row['tel']; ?>' class="form-control input-md">
								  </div>
								</div>

								<input id="NRIC" name="NRIC" type="hidden" value='<?php echo $row['NRIC']; ?>' >


								<!-- Button (Double) -->
								<div class="form-group">
								  <label class="col-md-4 control-label"></label>
								  <div class="col-md-8">
								    <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
								    <a href="/thesis/main.php" class="btn btn-info" role="button">Back to Profile</a>
								  </div>
								</div>


						</form> <!-- /form -->

	                    </div>
	                
	                </div>

	            </div>


	</div>
</div>

</body>
</html>