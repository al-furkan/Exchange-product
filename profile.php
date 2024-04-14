<?php    
session_start();
include("db.php");
if(isset($_SESSION["email"])){
$email =  $_SESSION["email"];
$get_user = "select * from user_info where email ='$email'";
$run_user = mysqli_query($con, $get_user);
$row_user=mysqli_fetch_array($run_user);
$id = $row_user['user_id'];
$name= $row_user['namea'];
$email = $row_user['email'];
$Mobile = $row_user['mobile'];
$address = $row_user['address1'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/profile.css">
  <title>Profile</title>
</head>
<body>
 
<?php

  include('./header.php');


  if(isset($_GET['profile'])){
    $get_id = $_GET['profile'];


$details= "select * from user_info where user_id='$get_id'";
$run_w = mysqli_query($con, $details);
$row_w=mysqli_fetch_array($run_w);
$id = $row_user['user_id'];
$name= $row_user['namea'];
$email = $row_user['email'];
$Mobile = $row_user['mobile'];
$address = $row_user['address1'];
  }

?>
<center>
  <div class="app-widget-profile-card-night" onmouseover="app_widget_profile_card()" onmouseout="app_widget_profile_card_out()">
    <img src="https://1.bp.blogspot.com/-HgLR7c2TQls/Xa_6FcY5GqI/AAAAAAAABwA/vv9CX_FEgGYiUM99F2_pAr28kZ0qBopzgCLcBGAsYHQ/s1600/stylish%2Bdp%2Bfor%2Bgirls%2B%25282%2529.jpg" id="app_widget_profile_card_img">
    <hr>
    <h1><?php echo $name; ?></h1>
    <h2><?php echo $email; ?></h2>
    <h3><?php echo $Mobile; ?></h3>
    <h4><?php echo $address; ?></h4>
    <button id="app_widget_profile_card_btn">Update Profile</button>
  </div>
</center>

<script src="./js/profile.js"></script>
  
</body>
</html>