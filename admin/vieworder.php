<?php
session_start();
include("../db.php");

if(!isset($_SESSION['email'])){
  echo "<script>window.open('login.php?not_admin=you have not admin','_self')</script>";
}
else{



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/order.css">
   <link rel="stylesheet" href="./css/nav.css">
    <title>Order</title>
    
</head>
<body>
  <?php 

   include("./navbar.php");

  ?>

<h1>Shopping Cart</h1>

<div class="container">
    <div class="divTable div-hover">
        
            <div class="rowTable bg-primary text-white pb-2">
                <div class="divTableCol">Product</div>
                <div class="divTableCol">Authorized</div>
                <div class="divTableCol">Quantity</div>
                <div class="divTableCol">Price</div>
                <div class="divTableCol">Total</div>
                <div class="divTableCol">Actions</div>
            </div>
        
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
          
                        
        
             ?>
        
            <div class="rowTable">
                <div class="divTableCol">
                    <div class="media">
                        <a class=" pull-left mr-2 ml-0" href="#"><img width = "100px"   height="120px" class="img-fluid" src="<?php echo $img1;?>" /></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#"><?php echo $proname ;?></a></h4>
                            <h5 class="media-heading"> Price:<?php echo  $proprice;?> <a href="#">Details</a>
                             </h5>Size:  <i> <?php echo $prosize ;?> </i>  <b><?php echo $procount ;?> </b>
                            <span>Status: </span><span class="text-warning"><strong>Pending request</strong></span>
                        </div>
                    </div>
                </div>
                <div class="divTableCol"><strong class="label label-warning"><?php echo $casname ;?></strong></div>
                <div class="divTableCol">
                <div class="divTableCol"><strong><?php echo $casemail ;?></strong></div>
                </div>
                <div class="divTableCol"><strong><?php echo $casphone ;?></strong></div>
                <div class="divTableCol"><strong><?php echo $casaddress ;?></strong></div>
                <div class="divTableCol">
                    <a href="removeorder.php?rm=<?php echo $id; ?>"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span> Remove</button></a>
                </div>
            </div>



<?php }?>

            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h5>Subtotal</h5></div>
                <div class="divTableCol">
                    <h5><strong>€570.00</strong></h5>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h5>Prezzo totale</h5></div>
                <div class="divTableCol">
                    <h5><strong>€570.00</strong></h5>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"><h3>Total</h3></div>
                <div class="divTableCol">
                    <h3><strong>€570.00</strong></h3>
                </div>
            </div>
            <div class="rowTable">
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol"></div>
                <div class="divTableCol">
                    <button type="button" class="btn btn-default col-6"></span> Torna indietro </button>
                </div>
                <div class="divTableCol">
                    <button type="button" class="btn btn-success">Salva la pratica</span></button>
                </div>
            </div>        
    </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>

<?php } ?>