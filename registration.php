<?php
include 'database.php';
if(isset($_POST['sub']))
{
     $name=$_POST['un'];
     $id=$_POST['uns'];
     $email=$_POST['em'];
     $password=$_POST['pass'];
     $repassword=$_POST['pass'];
     $phone=$_POST['pho'];

     $sql="insert into registration(sname,sid,semail,password,repassword,pnumber) values('$name','$id','$email','$password','$repassword','$phone')";
     if(mysqli_query($con,$sql))
     {
          echo "<script>window.open('login.php','_self')</script>";}
     else
     {
          echo "error".mssqli_error($con);
     }
     mysqli_close($con);
}
?>
<html>
<title>REGISTRATION FORM</title>

<head>
     <link type="text/css" rel="stylesheet" href="registration.CSS" />
     <!-- Add icon library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
	.background{
    width: 100%;
    height: 100vh;
    background-image: url("images/img(15).jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
</style>
</head>

<body>
     <div class="background">
     <div class="container">
          <h2>REGISTRATION FORM</h2>
          <div class="form-container">
               <form method="post">
                    <div class="input-name">
                         <i class="fa fa-user lock"></i>
                         <input type="text" placeholder="Student Name" name="un" class="name" required>
                    </div>
                    <div class="input-name">
                         <i class="fa fa-user lock"></i>
                         <input type="char" placeholder="Enter Student Id" name="uns" class="name" required>
                    </div>
                    <div class="input-name">
                         <i class="fa fa-envelope email"></i>
                         <input type="email" placeholder="Enter student email" name="em" class="text-name" required>
                    </div>
                    <div class="input-name">
                         <i class="fa fa-lock lock"></i>
                         <input type="password" placeholder="Enter Password" name="pass" class="text-name" required>
                    </div>
                    <div class="input-name">
                         <i class="fa fa-lock lock"></i>
                         <input type="password" placeholder="Confirm Password" name="pass" class="text-name" required>
                    </div>
                    <div class="input-name">
                         <i class="fa fa-phone lock"></i>
                         <input type="number" placeholder="Enter Phone Number" value="    +91" name="pho"
                              class="text-name" required>
                    </div>
                    <div class="input-name">
                         <input type="submit" class="button" name="sub" value="Register" required>
                    </div>
                    <div class="input-name">
                         <input type="reset" class="button" name="can" value="Cancel" required>
                    </div>
                    <div class="singup_link">
                         Already have an account <a href="login.php">singin</a>
                    </div>

               </form>
          </div>
     </div>
     </div>
</body>

</html>