<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="Rahul developer.jpg" alt="">
      </div>

      <div class="content">
         <h3>Developr & Designer</h3>
         <p>Hii, I am Rahul the devloper of this website <br>
this is an online book-selling website,<br> many times people don't get info about many books which are present in a nearby store,<br> on this website people can search for the book using the search bar to directly get that book,<br> and place an order to get the book at home.<br> Online shopping allows you to browse through endless possibilities,<br> And even offers products that are unavailable in stores.<br>
On online bo ok-selling websites more useful is the ability to compare items,<br> similar or not, online. You can search via multiple stores at the same time,<br> comparing material quality, sizes, and pricing simultaneously.<br>
Say 'goodbye' to the days when you stood in line waiting and waiting,<br> Online shopping transactions happen instantly-saving you time to get your other tasks done! Also,<br> unlike a shop, an online book-selling website has friendly customer service representatives available 24 hours a day,<br> 7 days a week to help you with locating, purchasing, and shipping your products.</p>
         <a href="contact.php" class="btn">let's Talk</a>
      </div>

   </div>

</section>









<?php include 'footer1.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>