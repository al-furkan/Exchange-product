<?php
     
     include("../db.php");
      session_start();
      $email =  $_SESSION["email"];
 
     if(!isset($_SESSION["email"])){
      header('location:login.php');
     }
     else{
 
     
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, 
						initial-scale=1.0">
	<link rel="stylesheet"
		href="./css/insertproduct.css">
</head>

<body>

	<!-- container div -->
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Catagory</button>
			<button class="signup">Product</button>
		</div>
     <form action="insartProduct.php" method="post" enctype="multipart/form-data">

                     <!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">

			<!-- login form -->
			<div class="login-box">
				<input type="text"
					class="password ele"
           name="cata"
					placeholder="catagory ">
          <input type="file"
					class="password ele"
           name="picture"
					placeholder="catagory ">
				<button class="clkbtn" type="submit" name="btn1">Insert</button>
			</div>
    </form>



		
   <form action="insartProduct.php" method="post" enctype="multipart/form-data">
			<!-- signup form -->
			<div class="signup-box">

                           
          <input type="text"
					class="name ele"
           name="name"
					placeholder="Enter Product name" required>
				<input type="number"
					class="email ele"
           name="price"
					placeholder="price" required>
					<select id="catagori" name="catagori"	class="name ele" required>
                <?php 
                       $get_d= "select * from catagori";
                       $run_d = mysqli_query($con, $get_d);
                       while($row_d=mysqli_fetch_array($run_d)){
                        $nameD = $row_d['catagoriname'];  
                        echo"<option value='$nameD'>$nameD</option> ";
                       }         
               ?>
                </select>
				<input type="file"
					class="password ele"
           name="img1"
					placeholder="add 1st Image" required>
					<input type="file"
					class="password ele"
           name="img2"
					placeholder="add 2nd Image" required>
					<input type="file"
					class="password ele"
           name="img3"
					placeholder="add 3rd Image" required>
					<input type="file"
					class="password ele"
           name="img4"
					placeholder="add 4th Image" required>
					<textarea  id="" cols="30" rows="20" name="discription" placeholder="Discription" required></textarea>
				<button class="clkbtn" type="submit" name="btn2">Product Post</button>

				
			</div>
     </form>
		</div>
	</div>
	<script src="./js/insartproduct.js"></script>
</body>
</html>




<?php
if(isset($_POST['btn1']))
{
$cata=$_POST['cata'];


$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../uploads/".$pic_name);
	
$added  =  mysqli_query($con,"INSERT INTO catagori(catagoriname,cataimg) VALUES ('$cata','$pic_name')") or die ("query incorrect");

if($added){
  echo "<script>alert('Catagori insert Complite!')</script>";
  echo "<script>window.open('insartProduct.php?view_work','_self')</script>";
}

else{
  echo "<script>alert('Did not Submited!')</script>";
  echo "<script>window.open('insartProduct.php?view_work','_self')</script>";
}
mysqli_close($con);
}

?>




<?php

if (isset($_POST['btn2'])) {
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    $category = $_POST['catagori'];
    $description = $_POST['discription'];

    // File upload handling for images
    $targetDir = "../uploads/"; // Directory where images will be uploaded
    $img1 = $targetDir . basename($_FILES['img1']['name']);
    $img2 = $targetDir . basename($_FILES['img2']['name']);
    $img3 = $targetDir . basename($_FILES['img3']['name']);
    $img4 = $targetDir . basename($_FILES['img4']['name']);

    // Insert data into the database
    $insertQuery = "INSERT INTO `product`(namea, price, catagori, img1, img2, img3, img4, discript) 
                    VALUES ('$productName', '$productPrice', '$category', '$img1', '$img2', '$img3', '$img4', '$description')";

    if (mysqli_query($con, $insertQuery)) {
        // Upload images to the specified directory
        move_uploaded_file($_FILES['img1']['tmp_name'], $img1);
        move_uploaded_file($_FILES['img2']['tmp_name'], $img2);
        move_uploaded_file($_FILES['img3']['tmp_name'], $img3);
        move_uploaded_file($_FILES['img4']['tmp_name'], $img4);

				echo "<script>alert('Catagori insert Complite!')</script>";
				echo "<script>window.open('insartProduct.php?view_work','_self')</script>";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($con);
				echo "<script>alert('Did not Submited!')</script>";
        echo "<script>window.open('insartProduct.php?view_work','_self')</script>";
    }
}

// Close the database connection
mysqli_close($con);

     }
?>
