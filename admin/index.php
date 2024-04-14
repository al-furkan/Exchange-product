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
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0">
    <title>Fonclick</title>
    <link rel="stylesheet"
          href="./css/style.css">
    <link rel="stylesheet"
          href="./css/responsive.css">
</head>
 
<body>
   
    <!-- for header part -->
    <header>
 
        <div class="logosec">
            <div class="logo">Fonclick</div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn"
                id="menuicn"
                alt="menu-icon">
        </div>
 
        <div class="searchbar">
            <input type="text"
                   placeholder="Search">
            <div class="searchbtn">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn"
                    alt="search-icon">
              </div>
        </div>
 
        <div class="message">
            <div class="circle"></div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
                 class="icn"
                 alt="">
            <div class="dp">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn"
                    alt="dp">
              </div>
        </div>
 
    </header>
 
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>
 
                    <div class="option2 nav-option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img"
                            alt="articles">
                        <h3> Articles</h3>
                    </div>
 
                    <div class="nav-option option3">
                       <a href="insartProduct.php">
                        <img src=
                        "https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                                                    class="nav-img"
                                                    alt="report">
                                                <b>Product</b>
                       </a>
                    </div>
 
                    <div class="nav-option option4">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img"
                            alt="institution">
                        <h3><a href="vieworder.php">View-Order</a></h3>
                    </div>
                    <div class="nav-option option4">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                            class="nav-img"
                            alt="institution">
                        <h3><a href="viewexorder.php">View Extra-Order</a></h3>
                    </div>
 
                    <div class="nav-option option5">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                            class="nav-img"
                            alt="blog">
                        <h3>Profile</h3>
                    </div>
 
                    <div class="nav-option option6">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                            class="nav-img"
                            alt="settings">
                        <h3> Settings</h3>
                    </div>
 
                    <div class="nav-option logout">
                        
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                            class="nav-img"
                            alt="logout">
                        <h3><a href="./logout.php">Logout</a></h3>
                        
                    </div>
 
                </div>
            </nav>
        </div>
        <div class="main">
 
            <div class="searchbar2">
                <input type="text"
                       name=""
                       id=""
                       placeholder="Search">
                <div class="searchbtn">
                  <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                  </div>
            </div>
 
            <div class="box-container">
 
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Article Views</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views">
                </div>
 
                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Likes</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
                         alt="likes">
                </div>
 
                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Comments</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">
                </div>
 
                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Published</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent User</h1>
                    <button class="view">View All User</button>
                </div>
 
                <div class="report-body">


 <table class="table">
  <thead class="thead-dark">
    <tr>
                      <th class="para01">Sr-No</th>
                      <th class="para01">User name</th>
                      <th class="para01">User Email</th>
                      <th class="para01">User PassWord</th>
                      <th class="para01">User mobile</th>
                      <th class="para01">User address</th>
                      <th class="para01">DELETE User</th>
                      <th class="para01">Update User</th>
    </tr>
  </thead>
  <tbody>
    
	<?php 
                       $get_w = "SELECT * FROM user_info order by user_id desc";
                       $run_w = mysqli_query($con, $get_w);
                       $i=0;
                       while($row_w=mysqli_fetch_array($run_w)){
                        $id = $row_w['user_id'];
						$name = $row_w['namea'];
                        $email = $row_w['email'];
                        $password = $row_w['pass'];
                        $mobile = $row_w['mobile'];
                        $address = $row_w['address1'];
                        $i++;
							echo "<tr>
						 <td>$i</td>
                         <td>$name</td>
                         <td>$email</td>
	                     <td>$password</td>
                         <td>$mobile</td>
                         <td>$address</td>
                         <td><a href='removeorder.php?rmuser=$id'>DELETE</a></td>
                         <td> <a href='update.php?update=$id'>Update</a></td>
						 </tr>";
                       }
                        ?> 

  </tbody>
</table>
<a href=""></a>
				


					</div>
				</div>
			</div>
		</div>
	</div>
<?php ?>

                    
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script src="./js/index.js"></script>
</body>
</html>




<?php } ?>