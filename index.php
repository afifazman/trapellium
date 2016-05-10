<?php include 'header.php'; ?>

<section id="logo">
<a href="#"><img src="assets/images/utm-logo.png" alt="" height="100" width="300" /></a>
</section>

<section class="container">

	<form name="form1" method="post" action="checklogin.php" role="login">
		<div>
			<input type="text" name="username" placeholder="Enter your username" value="afnizan" required class="form-control" />
			<span class="glyphicon glyphicon-user"></span>
		</div>
		
		<div>
			<input type="password" name="password" placeholder="Enter password" value="Thesis1234" required class="form-control" />
			<span class="glyphicon glyphicon-lock"></span>
		</div>
	
		<button type="submit" name="submit" class="btn btn-block btn-primary">Login Now</button>

	</br>

		<p align="center">New User? <a href="signup.php">Register Here</p>
		
	</form>

</section>
<?php include 'footer.php'; ?>
	