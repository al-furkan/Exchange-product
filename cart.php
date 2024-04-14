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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>
   <?php
   $email ="";

    include("./header.php");
    
    
   ?>




    <section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card shopping-cart" style="border-radius: 15px;">
          <div class="card-body text-black">

            <div class="row">
              <div class="col-lg-6 px-5 py-4">
            

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
               
                <?php  
              
              
              $get_w = "SELECT * FROM cart order by id desc";
              $run_w = mysqli_query($con, $get_w);
        
              while($row_w=mysqli_fetch_array($run_w)){
               $id = $row_w['id'];
               $casname = $row_w['pname'];
               $casemail = $row_w['pemail'];
               $casphone = $row_w['pphone'];
               $casaddress = $row_w['paddress'];
               
               $proname = $row_w['proname'];
               $proprice = $row_w['proprice'];
               $img1 = $row_w['proimg'];
               $prosize = $row_w['prosize'];
               $procount = $row_w['procount'];
          
                        if($casemail==$email){
        
                        ?>

                <div class="d-flex align-items-center mb-5">
                  <div class="flex-shrink-0">
                    <img src='./uploads/<?php echo $img1;?>'
                      class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                    <h5 class="text-primary"><?php echo $proname;?></h5>
                    <h6 style="color: #9e9e9e;">Size: <?php echo $prosize;?></h6>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3"><?php echo $proprice;?></p>
                      <div class="def-number-input number-input safari_only">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus"></button>
                        <input class="quantity fw-bold text-black" min="0" name="quantity" value="<?php echo $procount;?>"
                          type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus"></button>
                      </div>
                    </div>
                  </div>
                </div>



          <?php }  }?>

                <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                <div class="d-flex justify-content-between px-x">
                  <p class="fw-bold">Discount:</p>
                  <p class="fw-bold">00$</p>
                </div>
                <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                  <h5 class="fw-bold mb-0">Total:</h5>
                  <h5 class="fw-bold mb-0">00$</h5>
                </div>

              </div>
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>

                <form class="mb-5">

                  <div class="form-outline mb-5">
                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                      value="1234 5678 9012 3457" minlength="19" maxlength="19" />
                    <label class="form-label" for="typeText">Card Number</label>
                  </div>

                  <div class="form-outline mb-5">
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      value="John Smith" />
                    <label class="form-label" for="typeName">Name on card</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22"
                          size="7" id="exp" minlength="7" maxlength="7" />
                        <label class="form-label" for="typeExp">Expiration</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="password" id="typeText" class="form-control form-control-lg"
                          value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                        <label class="form-label" for="typeText">Cvv</label>
                      </div>
                    </div>
                  </div>

                  <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                      href="#!">obcaecati sapiente</a>.</p>

                  <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>

                  <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                    <a href="shop.php"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                  </h5>

                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>







<!-- footer design html css -->


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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>