<?php


session_start();

include('connection/config.php');

if(!isset($_SESSION['username']) || $_SESSION['username'] == " ")
{
       header("Location: index.php");
       die();
}

$staffID = $_SESSION['staffID'];



//sql query for staff PERSONAL DETAIL
$sql = "SELECT * FROM staf, login WHERE staf.staffID=$staffID AND login.staffID=$staffID AND login.staffID=staf.staffID";

$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);


//sql query for staff EDUCATION DETAIL
$sqlEdu = "SELECT * FROM education WHERE staffID=$staffID ORDER BY year DESC";

$resultEdu = mysqli_query($db, $sqlEdu);

$rowEdu = mysqli_fetch_array($resultEdu);


//sql query for staff EMPLOYMENT DETAIL
$sqlEmp = "SELECT * FROM employment,ptj WHERE employment.staffID=$staffID AND ptj.staffID=$staffID";

$resultEmp = mysqli_query($db, $sqlEmp);

$rowEmp = mysqli_fetch_array($resultEmp);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Online MyRA - Get Easy with the Stress</title>
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
	                        <li><a href="research.php"><i class="glyphicon glyphicon-stats"></i> Research </a></li>
	                        <li><a href="publication.php"><i class="glyphicon glyphicon-book"></i> Publication </a></li>
	                        <li><a href="student.php"><i class="glyphicon glyphicon-user"></i> Students </a></li>
	                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Innovation </a></li>
	                        <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Services </a></li>
	                        <li><a href="linkage.php"><i class="glyphicon glyphicon-globe"></i> Linkages</a></li>
	                        <?php

	                        	if ($_SESSION['level']=="admin")
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

							<h4><b>Admin Dashboard</b></h4>

	                    </div>
	                
	                </div>

	            </div>



			<div class="row">
			  <div class="col-md-4">
				  <div class="panel panel-info">

				     <div class="panel-heading"><h3 class="text-center">TAX REPORT</h3></div>
				         <div class="panel-body text-center">
							<p><strong>With Tax (GST)</strong></p></br>
							<p><strong>Without Tax</strong></p>
						</div>
				  </div>

			 </div>

			<div class="row">
			  <div class="col-md-4">
				  <div class="panel panel-info">

				     <div class="panel-heading"><h3 class="text-center">PURCHASE</h3></div>
				         <div class="panel-body text-center">
							<p><strong>With Tax (GST)</strong></p></br>
							<p><strong>Without Tax</strong></p>
						</div>
				  </div>

			 </div>

			<div class="row">
			  <div class="col-md-4">
				  <div class="panel panel-info">

				     <div class="panel-heading"><h3 class="text-center">SALES</h3></div>
				         <div class="panel-body text-center">
							<p><strong>With Tax (GST)</strong></p></br>
							<p><strong>Without Tax</strong></p>
						</div>
				  </div>

			 </div>

			<div class="row">
			  <div class="col-md-4">
				  <div class="panel panel-info">

				     <div class="panel-heading"><h3 class="text-center">INNOVATION</h3></div>
				         <div class="panel-body text-center">
							<p><strong>Section E: Innovation</strong></p></br>
							<p><strong>Section F: Professional Services & Gifts</strong></p></br>
						</div>
				  </div>

			 </div>


			<div class="row">
			  <div class="col-md-4">
				  <div class="panel panel-info">

				     <div class="panel-heading"><h3 class="text-center">LINKAGES</h3></div>
				         <div class="panel-body text-center">
							<p><strong>Section G: Networking & Linkages</strong></p></br>
							<p><strong>Section H: Accreditation Laboratories</strong></p></br></br>
						</div>
				  </div>

			 </div>



	        </div>


	</div>



















</div>

</body>
</html>