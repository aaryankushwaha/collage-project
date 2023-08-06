<style>
    /*about start*/

.about{
    width: 100%;
    padding: 78px 0px;
    background-color: #191919;
}
.about img{
    height: auto;
    width: 420px;
}
.about-text{
    width: 550px;

}
.main{
    width: 1130px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.about-text h1{
    color: #fff;
    font-size: 80px;
    text-transform: capitalize;
    margin-bottom: 20px;
}
.about-text h5{
    color: white;
    font-size: 25px;
    text-transform: capitalize;
    margin-bottom: 25px;
    letter-spacing: 2px;
}
span{
    color: #f9004d;
}
.about-text p{
    color: #fcfc;
    letter-spacing: 1px;
    line-height: 28px;
    font-size: 15px;
    margin-bottom: 45px;
}
button{
    background: #f9004d;
    color: #fff;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 13px 30px;
    border-radius: 30px;
    transition: .4s;
}
button:hover{
    background: transparent;
    border: 2px solid #f9004d;
    cursor: pointer;
}
/*about start*/

</style>

<section id="about" class="about">
<?php include 'header.php'; ?>
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
    <?php include 'footer1.php'; ?>
</section>
