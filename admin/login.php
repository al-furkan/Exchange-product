<?php
session_start();
include("../db.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fonclick</title>
  <link rel="stylesheet" href="./css/login.css">
</head>
  <body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                <form action="login.php" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="USERNAME"  name="email" />
                    <input type="password" placeholder="PASSWORD" name="password" />
                    <button  type="submit"class="opacity" name="login" >Login</button>
                </form>
                <div class="register-forget opacity">
                    <a href="">REGISTER</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>

    <script src="./js/login.js"></script>
</body>
</html>


<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass =$_POST['password'];
    
    $sel_user ="SELECT * FROM admin WHERE  email='$email' AND password='$pass'";
    $run_user=mysqli_query($con,$sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==0){
    echo " <script>alert('password or email is worng, please try again')</script>";
    }
    else{
        $_SESSION['email']=$email;
        echo "<script>window.open('index.php?logged_in=you have successfuly login','_self')</script>";
    }
   
}
?>