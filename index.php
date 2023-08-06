<?php
error_reporting(0);
include 'config.php';

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $sub = mysqli_real_escape_string($conn, $_POST['sub']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact` WHERE name = '$name' AND email = '$email' AND sub = '$sub' AND message = '$message'") or die('query failed');
   if(mysqli_num_rows($select_message) > 0){
    $message[] = 'message sent already!';
 }else{
   mysqli_query($conn, "INSERT INTO `contact`(name, email, sub, message) VALUES('$name', '$email', '$sub', '$message')") or die('query failed');
   $message[] = 'registered successfully!';
 }

}
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/4894f1beb4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,400;0,500;0,600;0,700;1,200;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <!--head start-->
    
    <div class="hero">

        <video autoplay loop muted plays-inline class="bv">
            <source src="book.mp4" type="video/mp4">
        </video>


        <nav>
        <img src="143.png" class="logo">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="">Blog</a></li>
        </ul>
       </nav>
       <div class="content">
        <h1>BOOKLY</h1>
        <a href="#about">Explore</a>
       </div>
    </div>
 <!--head end-->
    
<section id="about" class="about">
    <div class="main">
        <img src="rahul.jpg">
        <div class="about-text">
            <h1>About Us</h1>
            <h5>Developr<span> & Designer</span></h5>
            <p> Hii, I am Rahul the devloper of this website<br>
                this is an online book-selling website, many times people don't get info about many books which
                are present in a nearby store, on this website people can search for the book using the search bar to
                directly get that book, and place an order to get the book at home.
                Online shopping allows you to browse through endless possibilities, And even offers products that are
                unavailable in stores.<br>
                On online bo ok-selling websites more useful is the ability to compare items, similar or not, online.
                You can search via multiple stores at the same time, comparing material quality, sizes, and pricing
                simultaneously.<br>
                Say 'goodbye' to the days when you stood in line waiting and waiting, Online shopping
                transactions happen instantly-saving you time to get your other tasks done! Also, unlike a shop, an
                online book-selling website has friendly customer service representatives available 24 hours a day, 7
                days a week to help you with locating, purchasing, and shipping your products.</p>
                <button type="button">let's Talk</button>
        </div>
    </div>
</section>
<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'alers.php'; ?>

<!--contact us form start-->

<section class="contact" id="contact">
    <div class="contact-form">
        <h1>Contact<span>Us</span></h1>
        <p>I have found a rough picture strategy of how my site will compete in the market by trying to provide
            better features and information than competitors.
            </p>
            <form action="" method="post">
                <input type="" name="name" id="name" placeholder="your name" required>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <input type="" name="sub" id="sub" placeholder="write a subject" required>
                <textarea name="message" id="message" cols="30" row="10" placeholder="Your Message" required>

                </textarea>       
                <input type="submit" name="submit" id="submit" value="submit" class="btn">      
            </form>
    </div>
    <div class="contact-img">
        <img src="contact.jpeg">
    </div>
</section>
<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sub = $_POST['sub'];
        $message = $_POST['message'];

    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookly";
    

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO index_contact (id, name, email, sub ,message) VALUES ('0', '$name', '$email', '$sub','$message')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con,$sql);
    if($rs)
    {
        $success_msg[] = 'Entries added!';
    }
  
    // close connection
    mysqli_close($con);
   
?>


<!--contact us form end-->

<!--service START-->

<div id="service" class="container">

    <h1 class="heading">Our <span>Services</span></h1>

    <div class="box-container">

        <div class="box">
            <h3>Create Bundled Deals, Gift Sets, and Other Promotions – And Track Them</h3>
            <p>Books make a great gift and sets of books make an even better gift. Especially around the holidays.<br> So get creative and put together great gift packages.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <h3>Get the Right Bookstore Point of Sale</h3>
            <p>You must have a great inventory management system. And in order to have a great inventory management system,<br> you must have a great bookstore POS system.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <h3>bookly</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <h3>Sell Lots of Impulse Buys and Related Products</h3>
            <p>Just because you have a bookstore doesn’t mean that you have to sell books exclusively. <br>Add-on products or other impulse purchases are great tools to boost sales and increase the average customer spend.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <h3>Think About Adding a Coffee Shop to Your Bookstore</h3>
            <p>Many popular bookstores, <br>including all the major big box bookshop retailers, have small coffee shops or cafes within the store.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <h3> Host Book Events</h3>
            <p>Hosting authors for talks and book signings is a great way to draw a crowd and sell a lot of books. <br>These are great for building your word-of-mouth marketing and fostering a sense of community around your store. </p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</div>


<!--service end-->

<!--blogs start-->


<!--blogs end-->

<!--footer start-->
    <div class="footer">
        <div class="col-1">
            <h3>USEFUL LINKS</h3>
            <a href="#about">About</a>
            <a href="#service">Services</a>
            <a href="#contact">Contact</a>
            <a href="#">Shop</a>
            <a href="#">Blog</a>
        </div>
        <div class="col-2">
            <h3>NEWSLETTER</h3>
            <FORM>
                <input type="email" placeholder="Your Email Address" required>
                <br>
                <button type="submit">SUBSCRIBE NOW</button>
            </FORM>
        </div>
        <div class="col-3">
            <h3>CONTACT</h3>
            <P>Rathodi Village ,Gao Devi Mandir,<br>Malad West Mumbai-400095</P>
            <br>
            <p>91+ 111-222-333</p>
            <div class="social-icons">
                <i class='fab fa-facebook'></i>
                <i class='fab fa-twitter'></i>
                <i class='fab fa-instagram'></i>
                <i class='fab fa-behance'></i>

            </div>
        </div>
    </div>
    <!--footer end-->
    <!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'alers.php'; ?>
</body>
</html>