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
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?php

include("./header.php");

if(isset($_GET['cataid'])){
  $get_id = $_GET['cataid'];


     $details= "select * from catagori where id='$get_id'";
       $run_w = mysqli_query($con, $details);

      $row_w=mysqli_fetch_array($run_w);
        $cataid = $row_w['id'];
        $catagoriname = $row_w['catagoriname'];
        $catagorimg = $row_w['cataimg'];

}





?> 

<section id="product1" class="section-p1">

        <h2>Featured Producted</h2>
        <p>Summer Collection new Morden Design</p>
        <div class="pro-containar">
      

        <?php
       

       $get_w = "SELECT * FROM product";
       $run_w = mysqli_query($con, $get_w);

       while($row_w=mysqli_fetch_array($run_w)){
        $id = $row_w['id'];
        $productname = $row_w['namea'];
        $price = $row_w['price'];
        $catagori= $row_w['catagori'];
        $img1 = $row_w['img1'];
        $img2 = $row_w['img2'];
        $img3 = $row_w['img3'];
        $img4 = $row_w['img4'];
        $discription = $row_w['discript'];


        if($catagori==  $catagoriname){
        ?>


            <div class="pro" onclick="window.location.href='details.php?prodetails=<?php echo $id ?>'">
                <img src="./uploads/<?php echo $img1 ?>" alt="">
                <div class="des">
                    <span><?php echo $catagori ?></span>
                    <h5><?php echo $productname ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $price ?> BDT</h4>
                </div>
                <a class="cart" href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>




            <?php
       }  }
              ?>




      </section>



<script src="./js/script.js"></script>
  
  </body>
</html>