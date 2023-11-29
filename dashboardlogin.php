<?php
include 'database.php';
if(isset($_POST['subs']))
{
	$id=$_POST['uni'];
	$password=$_POST['passw'];
	$sql="select * from employeee where eid='$id' and epassword='$password'";
	$que=mysqli_query($con,$sql);
	if(mysqli_num_rows($que)>0)
	{
		// echo "<script>alert('login ok')</script>";
		echo "<script>window.open('formd.php','_self')</script>";
	}
	else
	{
		echo"<script>alert('wrong username and password')</script>";
	}
	mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="boardlogin.CSS"/>
<!-- Add icon library -->
<!-- <link type="text/css" rel="stylesheet" href="dashboardlogin.css"/> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<title>pro</title>
<style>
	.background{
    width: 100%;
    height: 100vh;
    background-image: url("images/img3.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
	overflow:hidden;
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
						<input type="text" class="name" name="uni" required>
						<span></span>
						<label>Employee Id</label>
					</div>
					<div class="txt_field">
						<i class="fa fa-lock lock"></i>
						<input type="password" class="name" name="passw" required>
						<span></span>
						<label>Password</label>
					</div>
					<input type="submit" name="subs" value="Login">
					<div class="singup_link">
						Not a member? <a href="dashboardregistration.php">singup</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>