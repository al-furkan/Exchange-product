
<section id="heder">
        <a href="#"> <img src="img/ex.png" class="logo" alt=""></a>
         
        <div class="search-container">
  <form action="result.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Search..." name="search">
    <button type="submit"  name=" ScBtn">Search</button>
  </form>
</div>


        <div>
            <ul id="navebbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">ChangeProduct</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
               if(isset($_SESSION["email"])){
                echo"
                <li>
                <a href='./logout.php'>Logout</a>
                 </li>
                 <li><a href='./profile.php?profile=$id'>
                 <div class='user text-center'>
                <div class='profile'>

                  <img src='https://i.imgur.com/JgYD2nQ.jpg' class='rounded-circle' width='40'>
                 </div>
                 </div>
                 </a>
                 </li>
                 
                 ";
               }
               
             else{
                echo"
                <li><a href='./login.php'>Login/</a>
                    <a href='./register.php'>Sign Up</a>
                </li>";
               } 

                ?>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>