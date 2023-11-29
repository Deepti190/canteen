<?php
include 'database.php';
if(isset($_POST['sub']))
{
	$id=$_POST['uns'];
	$password=$_POST['pass'];
	$sql="select * from registration where sid='$id' and password='$password'";
	$que=mysqli_query($con,$sql);
	if(mysqli_num_rows($que)>0)
	{
		// echo "<script>alert('login ok')</script>";
		echo "<script>window.open('clientpage.php', '_self')</script>";
	}
	else
	{
		echo"<script>alert('wrong username and password')</script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Add icon library -->
	<link type="text/css" rel="stylesheet" href="login.CSS" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>pro</title>
	<style>
		.background {
			width: 100%;
			height: 100vh;
			background-image: url("images/img(13).jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
	</style>
</head>

<body>
	<div class="background">
		<div class="center">
			<h1>Login</h1>
			<div class="form-container">
				<form method="post">
					<div class="txt_field">
						<i class="fa fa-user"></i>
						<input type="text" class="name" name="uns" required>
						<span></span>
						<label>Student Id</label>
					</div>
					<div class="txt_field">
						<i class="fa fa-lock lock"></i>
						<input type="password" class="name" name="pass" required>
						<span></span>
						<label>Password</label>
					</div>
					<input type="submit" name="sub" value="Login">
					<div class="singup_link">
						Not a member? <a href="registration.php">singup</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>

</html>