<?php
session_start();

    $dsn = 'mysql:host=localhost;dbname=registration';
    try{
        $bdd = new PDO($dsn, 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOEXCEPTION $e){
        $e->getMessage();
    }

    if(isset($_SESSION['id']) AND $_SESSION['id'] > 0){
?>
<?php
    $requser = $bdd->query('SELECT * FROM product');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Electro Tools</title>
        <meta charset="utf-8"/>
        <meta name="viewport"/>

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
                                    <a href="index.html #blog" class="nav_link">Blog</a>
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
                                    <a href="index.html #contact" class="nav_link">Contact</a>
                                </li>
                            </ul>
                        
                        </div>

                        <div class="nav_icons">
                            <a href="" class="icon_item">
                                <svg>
                                    <use xlink:href="./image/sprite.svg#icon-search"></use>
                                </svg>
                            </a>
                            <a href="./php/login.php" class="icon_item">
                                <svg>
                                    <use xlink:href="./image/sprite.svg#icon-user"></use>
                                </svg>
                            </a>
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
        </header>
        <main id="main">
            <div class="container">
                <section class="category_section section" id="category">
                    <div class="tab_list">
                        <div class="title_container tabs">
                            <!-- categorie des articles -->

                            <div class="section_titles">
                                <div class="section_title_cat filter_btn active" data-id="wrench" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1200">
                                    <span class="dot_cat"></span>
                                        <h1 class="primary_title">WRENCH</h1>
                                </div>
                            </div> 
                        </div>
                        <div class="category_container" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="12000">
                            <div class="category_center">
                            <?php while($produit = $requser->fetch(PDO::FETCH_ASSOC)){ ?>
                                    <?php if($produit['product_cat'] === "wrench"){?>
                                        <div class="product category_product">
                                            <div class="product_header">
                                                <img src="<?= $produit['product_image']?>" alt="">
                                            </div>
                                            <div class="product_footer">
                                                <h3><?= $produit['product_name']?></h3>
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
                                                    <h4>Rs<?= $produit['product_price']?></h4>
                                                    <form class="form_submit">
                                                        <input type="hidden" class="pid" value="<?= $produit['id_product']?>">
                                                        <input type="hidden" class="pname" value="<?= $produit['product_name']?>">
                                                        <input type="hidden" class="pcat" value="<?= $produit['product_cat']?>">
                                                        <input type="hidden" class="pPrice" value="<?= $produit['product_price']?>">
                                                        <input type="hidden" class="pimage" value="<?= $produit['product_image']?>">
                                                        <input type="hidden" class="pcode" value="<?= $produit['product_code']?>">
                                                        <button type="button" class="product_btn" id="addItem">
                                                            Add to cart
                                                        </button>
                                                    </form>
                                                    
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
                                        <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
         <!--GlideJS-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

         <!--Animation scrolling-->
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 
         <!--script-->
         <script src="./js/index.js"></script>
         
         <script src="./js/slide.js"></script>
         <script type="text/javascript" src="./js/jquery.js"></script>

        <script type="text/javascript">
            (function($){
                $(document).ready(function(){
                    $(document).on("click", ".product_btn", function(e){
                        e.preventDefault();
                        var form = $(this).closest(".form_submit");
                        var pid = form.find(".pid").val();
                        var pname = form.find(".pname").val();
                        var pcat = form.find(".pcat").val();
                        var pPrice = form.find(".pPrice").val();
                        var pimage = form.find(".pimage").val();
                        var pcode = form.find(".pcode").val();
                        $.ajax({
                            url:"action.php",
                            method:"post",
                            data:{pid:pid, pname:pname, pcat:pcat, pPrice:pPrice, pimage:pimage, pcode:pcode},
                            success:function(response){
                                $(".alert-message").html(response);
                                load_cart_item_number();
                            }
                        });
                    });

                    
                    load_cart_item_number();
                    function load_cart_item_number(){
                        $.ajax({
                            url:"action.php",
                            method:"get",
                            data:{cartTotal:"cart_total"},
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
<?php
}
?>  
