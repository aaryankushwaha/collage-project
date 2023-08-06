<!--footer start-->
<style>
    /*  footer start    */

.footer{
    
    width: 100%;
    padding: 50px 15%;
    background-image: linear-gradient(to bottom, rgb(0, 0, 0), rgb(165, 161, 161));
    color: #efefef;
    display: flex;

}

.footer div{
    text-align: center;
}
.col-2{
    flex-grow: 2;
}
.footer div h3{
    font-weight: 300;
    margin-bottom: 30px;
    letter-spacing: 1px;
}


.col-1 a{
    display: block;
    text-decoration: none;
    color: #efefef;
    margin-bottom: 10px;
}

form .c1{
    width: 400px;
    height: 45px;
    border-radius: 4px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
    outline: none;
    border: none;
}
form button{
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 30px;
    padding: 10px 30px;
    font-size: 15px;
    cursor: pointer;
}
.social-icons{
    margin-top: 30px;
}
.social-icons i{
    font-size: 22px;
    margin: 10px;
    cursor: pointer;
}


/*  footer   end  */
    </style>
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
                <input class="c1" type="email" placeholder="Your Email Address" required>
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