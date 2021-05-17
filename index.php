<?php 
session_start();
    $userinfo="";
    $dsn = 'mysql:host=localhost;dbname=registration';
    try{
        $bdd = new PDO($dsn, 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOEXCEPTION $e){
        $e->getMessage();
    }
    

    if(isset($_GET['id']) AND $_GET['id'] > 0){
        $getid = intval($_GET['id']);
        $requser = $bdd->prepare("SELECT * FROM users WHERE id = ?");
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport"/>
        <title>Electro Tools</title>
        

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!--Google font-->
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,600;1,400&display=swap" rel="stylesheet">

        <!--Caroussel-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">

        <!--Animation scrolling-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!--StyleSheet-->
        <?php
         require_once 'css/stylesheet.php';
        ?>
        

       
    </head>
    <body>
        <!--header-->
        <header class="header" id="header">
            <div class="navigation">
                <div class="container">
                    <nav class="nav">

                        <div class="nav_logo">
                            <img src="image/logo.png">
                            <a href="index.php" class="scroll-link">Electro Tools</a>
                            
                        </div>

                    
                        <div>
                            <ul class="nav_list">
                                <li class="nav_item">
                                    <a href="index.php" class="nav_link">Home</a>
                                </li>
                                <li class="nav_item">
                                    <li class="dropdown">
                                        <a href="category.php" class="nav_link" >
                                            Category
                                        </a>
                                        <div class="dropdown_content" id="dropdown_container">
                                            <a  href="scie.php" class="dropdown_element" >SAW</a>
                                            <a  href="sanders.php" class="dropdown_element" >SANDERS</a>
                                            <a  href="screwdriver.php" class="dropdown_element" >SCREWDRIVER</a>
                                            <a  href="pliers.php" class="dropdown_element">PLIERS</a>
                                            <a  href="wrench.php" class="dropdown_element" >WRENCH</a>
                                            <a  href="box.php" class="dropdown_element" >BOX TOOLS</a>
                                        </div>    
                                    </li>
                                    
                    
                                </li>
            
                                <li class="nav_item">
                                    <a href="#blog" class="nav_link">Blog</a>
                                </li>
                                <li class="nav_item">
                                    <li class="dropdown">
                                        <a href="#categorie" class="nav_link" >
                                            Vendors
                                        </a>
                                        <div class="dropdown_content">
                                            <a  href="#">Store listing</a>
                                            <a  href="#">Store details</a>
                                            
                                        </div>
                                    </li>
                                    
                    
                                </li>
                            
                                <li class="nav_item">
                                    <a href="#contact" class="nav_link">Contact</a>
                                </li>
                            </ul>
                        
                        </div>

                        <div class="nav_icons">
                            <a href="" class="icon_item" >
                                <svg>
                                    <use xlink:href="./image/sprite.svg#icon-search"></use>
                                </svg>
                                
                            </a>
                            <button class="icon_item" >
                                <svg class="log">
                                    <use xlink:href="./image/sprite.svg#icon-user"></use>
                                </svg>
                                <!-- <?php if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']): ?>
                                    <div id="MyDropdown" class="dropdown_content">
                                        <a  href="./php/logout.php">LOG OUT</a>
                                    </div>
                                <?php endif ?> -->
                                
                                    <div id="MyDropdown" class="dropdown_content">
                                        <a  href="./php/register.php">SIGN UP</a>
                                        <a  href="./php/login.php">SIGN IN</a>
                                    </div>
                            </button>
                            <a href="./php/cart.php" class="icon_item">
                                <svg>
                                    <use xlink:href="./image/sprite.svg#icon-shopping-basket"></use>
                                </svg>
                                <span id="cart_total">0</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <!--Slide Area-->
            <div class="slide_area">
                <div class="glide" id="slide_1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="slide_center">
                                    <div class="slide_left">
                                        <span>NEW COLLECTION </span>
                                        <h1>RENEW YOUR HOUSE WITH OUR ELECTRONICS TOOLS</h1>
                                        <p>GIVE ANY CHARP TO YOUR DECORATION</p>
                                        <a href="#"><button class="slide_btn">SHOP NOW</button></a>
                                    </div>
                                    <div class="slide_right">
                                        
                                        <img class="banner_1" src="./image/product_1.jpg" alt="banner2" >
                                    
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="slide_center">
                                    <div class="slide_left">
                                        <span>NEW COLLECTION</span>
                                        <h1>RENEW YOUR HOUSE WITH OUR ELECTRONICS TOOLS</h1>
                                        <p>GIVE ANY CHARP TO YOUR DECORATION</p>
                                        <a href="#"><button class="slide_btn">SHOP NOW</button></a>
                                    </div>
                                    <div class="slide_right">
                                        
                                        <img class="banner_2" src="./image/product_2.jpg" alt="banner2" >
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="slide_center">
                                    <div class="slide_left">
                                        <span>NEW COLLECTION</span>
                                        <h1>RENEW YOUR HOUSE WITH OUR ELECTRONICS TOOLS</h1>
                                        <p>GIVE ANY CHARP TO YOUR DECORATION</p>
                                        <a href="#"><button class="slide_btn">SHOP NOW</button></a>
                                    </div>
                                    <div class="slide_right">
                                    
                                        <img class="banner_3" src="./image/product_3.jpg" alt="banner2" >
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
            
                    </div>
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                        <button class="glide__bullet" data-glide-dir="=2"></button>
                        
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <svg>
                                <use xlink:href="./image/sprite.svg#icon-arrow-left2"></use>
                            </svg>
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <svg>
                                <use xlink:href="./image/sprite.svg#icon-arrow-right2"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!--Fin du header-->

        <!--Main-->
        <main id="main">
            <div class="container">
                <!--Promotion-->
                <section class="section_promotion" id="Promotion" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="title_prom" >
                        <h2>Promotion 50%</h2>
                        <span>Shop by Category and save money </span>
                    </div>
                    
                    <div class="promotion_container">

                        <div class="promotion_item">
                                <img src="./image/promo_1.jpg" alt=""/>
                            <div class="promotion_content">
                                <h3>SANDERS</h3>
                                <a href="sanders.php">SHOP NOW</a>
                            </div>
                        </div>

                        <div class="promotion_item">
                            <img src="./image/promo_3.jpg" alt=""/>
                            <div class="promotion_content">
                                <h3>SAW</h3>
                                <a href="scie.php">SHOP NOW</a>
                            </div>
                        </div>

                        <div class="promotion_item">
                            <img src="./image/promo_4.jpg" alt=""/>
                            <div class="promotion_content">
                                <h3>SCREWDRIVER</h3>
                                <a href="screwdriver.php">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="promotion_item">
                            <img src="./image/promo_5.jpg" alt=""/>
                            <div class="promotion_content">
                                <h3>BOX TOOLS</h3>
                                <a href="box.php">SHOP NOW</a>
                            </div>
                        </div>

                        <div class="promotion_item">
                            <img src="./image/promo_2.jpg" alt=""/>
                            <div class="promotion_content">
                                <h3>WRENCH</h3>
                                <a href="wrench.php">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="promotion_item">
                            <img src="./image/promo_6.jpg" alt=""/>
                            <div class="promotion_content">
                                <h3>PLIERS</h3>
                                <a href="pliers.php">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Latest Product-->
                <section class="section_latest" id="latest">
                    <div class="title_container">
                        <div class="section_title active" data-id="Latest Products">
                            <span class="dot"></span>
                            <h1 class="primary_tile">Latest Product</h1>
                        </div>
                    </div>
                    <div class="container" data-aos="fade-up" data-aos-duration="1200">
                        <div class="glide" id="slide_2">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides latest">
                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_1.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>MINI WRENCH</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>150 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>
                                                    <!-- <a href="#" >
                                                            <svg>
                                                                <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a>
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_2.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>VT20CL BOX</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>250MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>      
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a>
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_3.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>MAKITA JIGSAW</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>8000 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>   
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a> 
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_4.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>MIRKA DEROS</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>26400 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>  
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a> 
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_5.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>METAL SAW</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>200 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>   
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a> 
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_6.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>MAKITA DRILL AND DRIVER</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>9480 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>   
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a> 
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_7.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>DEWALT ANGLE GRINDER</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>3200 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>   
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a> 
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="glide__slide">
                                        <div class="product">
                                            <div class="product_header">
                                                <img src="./image/latest_8.jpg" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3>DELTA SANDER METABO</h3>
                                                <div class="rating">
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-full"></use>
                                                    </svg>
                                                    <svg>
                                                        <use xlink:href="./image/sprite.svg#icon-star-empty"></use>
                                                    </svg>
                                                </div>
                                                <div class="product_price">
                                                    <h4>3160 MUR</h4>
                                                    <a href="#"><button type="button" class="product_btn">
                                                        Add to cart
                                                    </button></a>
                                                </div>
                                                <ul>   
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-eye"></use>
                                                        </svg>
                                                    </a> -->
                                                    <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-heart-o"></use>
                                                        </svg>
                                                    </a> 
                                                    <!-- <a href="#" >
                                                        <svg>
                                                            <use xlink:href="./image/sprite.svg#icon-loop2"></use>
                                                        </svg>
                                                    </a> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <svg>
                                        <use xlink:href="./image/sprite.svg#icon-arrow-left2"></use>
                                    </svg>
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <svg>
                                        <use xlink:href="./image/sprite.svg#icon-arrow-right2"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            
                
        </main>

        <footer id="footer">
            <?php include 'php/footer.php'?>
        </footer>

      
        
           
        <!-- Go to the TOP -->
        <a href="#header" class="go_top scroll__link">
            <svg>
                <use xlink:href="./image/sprite.svg#icon-arrow-up"></use>
            </svg>
        </a>



        <!--GlideJS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

        <!--Animation scrolling-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!--script-->
        <script src="./js/index.js"></script>
        <script src="./js/product.js"></script>
        <script src="./js/slide.js"></script>
        <script type="text/javascript" src="./js/jquery.js"></script>
       
        <script>
           
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            $(".product_btn").click(function(){
                document.location.href = "cart.html";;
            });
        </script>
        <script type="text/javascript">
            (function($){
                $(document).ready(function(){
                    load_cart_item_number();
                    function load_cart_item_number(){
                        $.ajax({
                            url:"action.php",
                            method:"get",
                            data:{cartItem:"cart_total"},
                            success:function(response){
                                $("#cart_total").html(response);
                            }
                        });
                    }
                });
                
            }) ( jQuery );
        </script>
    </body>
</html>
