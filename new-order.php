<?php include 'header.php' ?>
<?php
$NRIC = $_SESSION['nric'];

//sql query for staff PERSONAL DETAIL
$sql = "SELECT * FROM personal, login WHERE login.NRIC='$NRIC' AND login.NRIC=personal.NRIC";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
?>
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

					<form action="insert_order.php" id="myForm" name="myForm" class="form-horizontal" method="POST">
						
						<h4><b>Place New Order</b></h4>
					</br></br>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label">Matric No.</label>  
						<div class="col-md-5">
							<input id="studentID" name="studentID" type="text" placeholder="Enter your matric number here" class="form-control input-md">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Program</label>  
						<div class="col-md-5">
							<input id="program" name="program" type="text" placeholder="Enter your program here" class="form-control input-md">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Faculty</label>  
						<div class="col-md-5">
							<select id="faculty" name="faculty" class="form-control input-md">
								<option value="Please Select" selected>Please Select Your Faculty</option>
								<option value="Faculty of Electrical Engineering">Faculty of Electrical Engineering</option>
								<option value="Faculty of Science">Faculty of Science</option>
								<option value="Faculty of Computing">Faculty of Computing</option>
							</select>
						</div>
					</div>


					<div class="form-group">
						<label class="col-md-4 control-label">Thesis Title</label>  
						<div class="col-md-5">
							<input id="title" name="title" type="text" placeholder="Enter your thesis title here" class="form-control input-md">
						</div>
					</div>


					<div class="form-group">
						<label class="col-md-4 control-label">Supervisor Name</label>  
						<div class="col-md-5">
							<input id="supervisor" name="supervisor" type="text" placeholder="Enter your supervisor name here" class="form-control input-md">
						</div>
					</div>


					<!-- Button (Double) -->
					<div class="form-group">
						<label class="col-md-4 control-label"></label>
						<div class="col-md-8">
							<button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
							<button id="reset" name="reset" type="reset" class="btn btn-primary">Reset</button>
							<a href="main.php" class="btn btn-info" role="button">Back to Main</a>
						</div>
					</div>									


					<input id="NRIC" name="NRIC" type="hidden" value='<?php echo $row['NRIC']; ?>' >


				</form>

				
			</div>

		</div>


	</div>
</div>
<?php include 'footer.php' ?>