<?php
session_start();
include("./db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exchange</title>
  <link rel="stylesheet" href="./admin/css/login.css">
</head>
  <body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">REGISTER</h1>
                <form action="register.php" method="post" enctype="multipart/form-data">
                <span>or use your email for registration</span>
			     <input type="text" placeholder="Name"  name="name" required/>
			     <input type="email" placeholder="Email" name="email" required/>
			     <input type="text" placeholder="Phone" name="phone"  required/>
			     <input type="password" placeholder="Password" name="password"  required />
			    <input type="text" placeholder="Address" name="address" required/>
			    <button type="submit" class="btn btn-outline-primary" name="btn">Sign Up</button>
                </form>
                <div class="register-forget opacity">
                    <a href="login.php">LOGIN</a>
                    <a href="#">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>

    <script src="./admin/js/login.js"></script>
</body>
</html>


<?php
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $address=$_POST['address'];

		
    $added  = mysqli_query($con,"INSERT INTO user_info(namea, email, pass, mobile, address1) VALUES ('$name','$email','$password','$phone',' $address')") or die ("query incorrect");

if($added){
  echo "<script>alert('Work post Complite!')</script>";
  $_SESSION['email']=$email;
   echo "<script>window.open('./index.php?logged_in=you have successfuly login','_self')</script>";
}

else{
  echo "<script>alert('Your register incomplited!')</script>";
  echo "<script>window.open('login.php?view_work','_self')</script>";
}
mysqli_close($con);
}

?>