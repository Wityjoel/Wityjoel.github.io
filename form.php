<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
 <!-- font awesome link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <!-- css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header" >
    <div class="containers" > 
     <div class="navbar">
         <div class="logo">
            <a href="home.php"><img src="images/logo.png" width="125px"></a> 
         </div>
         <nav>
             <ul>
                 <li><a href="home.php">Home</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="form.php">Form</a></li>
                 <li><a href="resources.php">Resource</a></li>
             </ul>
         </nav>
         <div id="menu-btn" class="fas fa-bars"> </div>
     </div>
</div>

    <div class="container" style="background:url(images/13.jpg)" >



<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">
      Get a suggestion.
    </h1>
<form action="book-form.php" method="post" class="book-form">
<div class="flex">
    <div class="inputBox">
        <span> Name:</span>
        <input type="text" placeholder="enter your name" name="name" required>

    </div>
    <div class="inputBox">
        <span> Email:</span>
        <input type="email" placeholder="Eg:wity@gmail.com" name="email" required>

    </div>
    <div class="inputBox">
        <span> Phone:</span>
        <input type="number" placeholder="Eg:0712345678" name="phone" maxlength="10" minlength="10" required>

    </div>
    <div class="inputBox">
        <span> Address:</span>
        <input type="text" placeholder="Eg:Dar es salaam-Tanzania" name="address">

    </div>
    <div class="inputBox">
        <span> Business Type:</span>
        <input type="text" placeholder="Eg;Hotel, Clothing, Furniture..." name="business" required>

    </div>
    <div class="inputBox">
        <span>Are you a starter?:</span>
        <input type="text" placeholder="Yes or No" name="experience" required>

    </div>

</div>

<input type="submit" value="submit" class="btn" name="send">
</input>
</form>

</div>
</div>
</div>





</section>









<!-- booking dection ends -->


<!-------footer----->
<section class="footer">
    <div class="containers">
        <div class="row">
        <div class="footer-col-2">
        <a href="home.php"><img src="images/logo.png"></a> 
                <p>Our aim is to ensure easy, sustainable and results-driven website <br>
                    for our customers
                </p>
            </div>
        
            </div>
            <div class="footer-col-1">
                 <h3>Quick links</h3>
         <a href="home.php"> Home</a>
         <a href="about.php">About us</a>
         <a href="form.php">Form</a>
         <a href="resources.php">Resources</a>
               
                </div> 
            <div class="footer-col-3">
                <h3>Quick Notes</h3>
                <a href="resources.php">Benefits of having a website </a>
         <a href="resources.php">How to get profitable results</a>
         <a href="resources.php">Website and Digital marketing</a>
         <a href="resource.php"> Common mistakes to avoid</a>
               
            </div>
            <div class="footer-col-4">
                <h3>Contact Info</h3>
                <a href="tel:255 78601417"> +255 786014717</a>
         <a href="tel:255 747993134"> <i class="fas fa-phone"></i> +255 747993134</a>
         <a href="mailto:witysilvester@gmail.com"> <i class="fas fa-envelope"></i> witysilvester@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> DSM,Tanzania</a>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2024 - Wity Joel</p>
    </div>
</section>


    <!-- custom link js -->
<script src="script.js"></script>    
 


</body>
</html>