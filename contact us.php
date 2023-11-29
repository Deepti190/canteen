<?php
include 'database.php';
if(isset($_POST['sub']))
{
$name=$_POST['uns'];
$id=$_POST['uni'];
$query=$_POST['unq'];

$sql="insert into contact(sname,sid,query) values('$name','$id','$query')";
if(mysqli_query($con,$sql))
{
	echo "<script>window.alert('Query Submitted')</script>";
	echo "<script>window.open('clientpage.php','_self')</script>";
}
else
{
	echo "error".mssqli_error($con);
}
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Add icon library -->
	<link type="text/css" rel="stylesheet" href="contactus.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>pro</title>
	<style>
	.background{
    width: 100%;
    height: 100vh;
    background-image: url("images/img(1).jpg");
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
		<h1>Contact us</h1>
		<form method="post">
			<div class="txt_field">
				<i class="fa fa-user"></i>
				<input type="text" name="uns" required>
				<span></span>
				<label>Student Name</label>
			</div>
			<div class="txt_field">
				<i class="fa fa-user"></i>
				<input type="text" name="uni" required>
				<span></span>
				<label>Student Id</label>
			</div>
			<div class="txt_field">

				<!-- <i class="fa fa-lock lock"></i> -->

				<textarea name="unq" id="query" cols="40" rows="5" placeholder="write your query"></textarea>
				<span></span>
				<label></label>

			</div>
			<div class="pass">
				<input type="submit" name="sub" value="Submit">
			</div>
		</form>
	</div>
</div>
</body>

</html>