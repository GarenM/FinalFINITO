<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website design </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="index.css">







</head>
<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i> Gshop </a>

    <nav class="navbar">
        <a href="#home"> Home </a>
        <a href="#features"> features </a>
        <a href="#products"> products </a>
        <a href="#categories"> categories </a>
        <a href="#review"> review </a>
        <a href="logout.php"> logout </a>

    </nav>
    <div class="icon">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div> 
        <!-- <div class="fas fa-user " id="login-btn"></div> -->
    

    </div>

    <form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="images/randomtest.png" alt="">
        <div class="content"></div>
           <!-- <span class="price"></span> -->
        <span class="quantity"><h3 class="h33">Penaldo</h3><br>$7/-$Qty: 1</span>
    </div>
    
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="images/randomtest.png" alt="">
        <div class="content"></div>
         <!-- <span class="price"></span> -->
        <span class="quantity"><h3 class="h33">Penalty</h3><br>Free/-$Qty: 1</span>
    </div>
    
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="images/randomtest.png" alt="">
        <div class="content"></div>
            
        <!-- <span class="price"></span> -->
        <span class="quantity"><h3 class="h33">Saudi</h3><br>$200M/-$Qty: 1</span>
    </div>
    
    <div class="total">total : $200M/-</div>
    <a href="#" class="btn"> checkout </a>

   

</div>
<!--     
<form action="" class="login-form">
    <h3>login now</h3>
    <input type="email" placeholder=" your email" class="box">
    <input type="password" placeholder=" your password" class="box">
    <p>forgot your password <a href="#">click here</a></p>
    <p>dont have an account <a href="#">create now </a></p>
    <input type="submit" placeholder="login now" class="btn"> -->

    
</form>
</header>


<section class="home" id="home">

    <div class="content">


        <h3>Best price for the <span>Newest</span> Products</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Sed dolores nemo ipsum, quaerat porro odit fuga aut expedita eius optio.</p>
              <a href="#" class="btn"> Buy now</a>

              
    </div>

    
</section>


<section class="features" id="features">

    <h1 class="heading">our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/newproducts-transformed.png" alt="">
            <h3>newest products</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                 <a href="#" class="btn">read more  </a>
        </div>
        <div class="box">
            <img src="images/truckpic-transformed.png" alt="">
            <h3>estimated delivery time</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                 <a href="#" class="btn">read more  </a>
        </div>

        <div class="box">
            <img src="images/phone_payment-transformed.png" alt="">
            <h3>payment methods</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                 <a href="#" class="btn">read more  </a>
        </div>


    </div>



</section>


<section class="products" id="products">

    <h1 class="heading">our <span>products</span></h1>


    <div class="swiper products-slider">
    <div class=" wrapper">
        <div class="swiper-slide box">
            <img src="images/iphone-iphone-removebg-preview.png" alt="">
            <h3>iphone 14 pro</h3>
            <div class="price">$1399</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>
        </div>

        
        <div class=" swiper products-slider"> 
        <div class=" swiper-slide box">
            <img src="images/Samsung-Galaxy-S22-Ultra-removebg-preview (1).png" alt="">
            <h3>Samsung-Galaxy S22 Ultra</h3>
            <div class="price">$1899</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>
        </div>
    
    
        
    <div class=" swiper products-slider"> 
    <div class=" swiper-slide box">
        <img src="images/Samsung-Galaxy-S22-Ultra-removebg-preview (1).png" alt="">
        <h3>Samsung-Galaxy S22 Ultra</h3>
        <div class="price">$1899</div>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <a href="#" class="btn">add to cart</a>
    </div>
    </div>

<div class="swiper products-slider"> 
<div class=" swiper-slide box">
    <img src="images/airpods-pro-removebg-preview.png" alt="">
    <h3>airpods pro</h3>
    <div class="price">$199</div>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <a href="#" class="btn">add to cart</a>
</div>
</div>


  <div class=" swiper products-slider">
    <div class=" swiper-slide box">
    <img src="images/Samsung-Galaxy-S22-Ultra-removebg-preview (1).png" alt="">
    <h3>Samsung-Galaxy S22 Ultra</h3>
    <div class="price">$1899</div>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <a href="#" class="btn">add to cart</a>
</div>
</div>


<div class=" swiper products-slider"> 
<div class=" swiper-slide box">
    <img src="images/Samsung-Galaxy-S22-Ultra-removebg-preview (1).png" alt="">
    <h3>Samsung-Galaxy S22 Ultra</h3>
    <div class="price">$1899</div>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <a href="#" class="btn">add to cart</a>
</div>
</div>
</div>



</section>










<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="script.js"></script>
     
</body>
</html>