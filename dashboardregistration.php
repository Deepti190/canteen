<?php
include 'database.php';
if(isset($_POST['subm']))
{
	$id=$_POST['ii'];
	$name=$_POST['uni'];
	$email=$_POST['ema'];
	$gender=$_POST['rl'];
	$password=$_POST['passw'];
	$repassword=$_POST['passw'];
	$phone=$_POST['phno'];

	$sql="insert into employeee(eid,ename,eemail,egender,epassword,erepassword,ephone) values('$id','$name','$email','$gender','$password','$repassword','$phone')";
	if(mysqli_query($con,$sql))
	{
		echo "<script>window.open('dashboardlogin.php','_self')</script>";}
	else
	{
		echo "error".mysqli_error($con);
	}
	mysqli_close($con);
}
?>

<html>
<title>REGISTRATION FORM</title>
<head>
<link type="text/css" rel="stylesheet" href="boardregistration.CSS"/>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<h2>REGISTRATION FORM</h2>
		<div class="form-container">
			<form method="post">
				<div class="input-name">
					<i class="fa fa-user lock"></i>
					<input type="text" placeholder="Employee-Id" name="ii" class="name" required>
				</div>
				<div class="input-name">
					<i class="fa fa-user lock"></i>
					<input type="text" placeholder="Employeename" name="uni" class="name" required>
				</div>
				<div class="input-name">
					<i class="fa fa-envelope email"></i>
					<input type="email" placeholder="Enter Employee email" name="ema" class="text-name" required>
				</div>
				<div class="input-name">GENDER       
					<input type="radio" class="radio-button" name="rl" value="Male">
					<label style="margin-right:30px;">MALE</label>
					<input type="radio" class="radio-button" name="rl" value="Female">
					<label style="margin-right:30px;">FEMALE</label>
					<input type="radio" class="radio-button" name="rl" value="Others">
					<label style="margin-right:30px;">OTHERS</label>
				</div>
				<div class="input-name">
					<i class="fa fa-lock lock"></i>
					<input type="password" placeholder="Enter Password" name="passw" class="text-name" required>
				</div>
				<div class="input-name">
					<i class="fa fa-lock lock"></i>
					<input type="password" placeholder="Confirm Password" name="passw" class="text-name" required>
				</div>
				<div class="input-name">
					<i class="fa fa-phone lock"></i>
					<input type="text" placeholder="Enter Phone Number" value="" name="phno" class="text-name" required>
				</div>
				<div class="input-name">
					<input type="submit" class="button" name="subm" value="Register" required>
				</div> 
				<div class="input-name">
					<input type="reset" class="button" name="canc" value="Cancel" required>
				</div> 
			</form>
		</div>
	</div>
</body>
</html>