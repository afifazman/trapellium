<?php


session_start();

include('connection/config.php');

if(!isset($_SESSION['username']) || $_SESSION['username'] == " ")
{
       header("Location: index.php");
       die();
}

$NRIC = $_SESSION['NRIC'];


//sql query for ORDER DETAIL
$sqlSub = "SELECT personal.NRIC, submission.* FROM personal, submission WHERE submission.NRIC='$NRIC' AND submission.NRIC=personal.NRIC AND submission.status='Not Submitted'";

$resultSub = mysqli_query($db, $sqlSub);

$rowSub = mysqli_fetch_array($resultSub);



?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>UTM Thesis Printing Service</title>
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


							<h4><b>My Order List</b></h4>

							<table class="table table-striped">
                            <thead>
                                <td><b>No</b></td>
                                <td><b>Thesis Title</b></td>
                                <td><b>Status</b></td>
                                <td><b>Action</b></td>
                            </thead>


                            <?php 
                            $num=1;


                            if ($resultSub = mysqli_query($db, $sqlSub)) {
                              while($rowSub = mysqli_fetch_assoc($resultSub)){
                                echo "<tr><td>".$num++."</td><td>".$rowSub['title']."</td><td>".$rowSub['status']."</td><td><a href='view-order.php?no=".$rowSub['no']."'>Submit</a>";
                              }

                            }


                            ?>

							</table>	                    	























	                
	                </div>

	            </div>


	</div>
</div>

</body>
</html>