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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FonClick Shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
   <?php

    include("./header.php");

   ?>
    <section id="page-hader">

        <h2>Change Here</h2>

        <p>save more money & up to 70% off!</p>


    </section>

    <section id="product1" class="section-p1">

        <div class="pro-containar">

        <?php
       

       $get_w = "SELECT * FROM product order by id desc";
       $run_w = mysqli_query($con, $get_w);
       $i=0;
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
       }
              ?>
           
        </div>
    </section>


    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>



    </section>



    <section id="newslater" class="section-p1 section-m1">
        <div class="newstext">
            <h4>sing up For newslater</h4>
            <p>E-mail updates our latest shop and special offer
                <span>special offer.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" name="" id="" placeholder="Your imail address">
            <button class="normal">Sign up</button>
        </div>

    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Bagerpara jessore Kulna</p>
            <p><strong>Phome:</strong> 01568324336</p>
            <p><strong>Houre:</strong> 6am to 12 pm</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>


                </div>
            </div>

        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">about us</a>
            <a href="#">delivary Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & codition</a>
            <a href="#">contact Us</a>

        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>

        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>Form App Store Or Google Play</p>
            <div class="row">
                <a href="#"><img src="img/appstore.png" alt=""></a>
                <a href=""><img src="img/playstore.png" alt=""></a>
            </div>
            <p>Form App Store Or Google Play</p>
            <img src="img/payment.png" alt="">
        </div>

    </footer>
    <div class="copiright">
        <p> @2002 Teach -javascript Tamplate</p>
    </div>
    <script src="js/script.js"></script>
</body>

</html>