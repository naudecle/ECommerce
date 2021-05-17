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
    $grand_total = 0;
    $allItems = "";
    $items = array();
    
    $requser = $bdd->query('SELECT * FROM users');
    $requser->execute();
    $userinfo = $requser->fetch(PDO::FETCH_ASSOC);
    if($userinfo['id'] && $userinfo['id']==0){
        header("Location:login.php");
    }
    else{
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
         require_once '../css/stylesheet.php';
        ?>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

       
    </head>
    <body>
        <!--header-->
        <header class="header" id="header">
            <div class="navigation">
                <div class="container">
                    <nav class="nav">

                        <div class="nav_logo">
                            <img src="../image/logo.png">
                            <a href="../index.php" class="scroll-link">Electro Tools</a>
                            
                        </div>

                    
                        <div>
                            <ul class="nav_list">
                                <li class="nav_item">
                                    <a href="../index.php" class="nav_link">Home</a>
                                </li>
                                <li class="nav_item">
                                    <li class="dropdown">
                                        <a href="../category.php" class="nav_link" >
                                            Category
                                        </a>
                                        <div class="dropdown_content" id="dropdown_container">
                                            <a  href="../scie.php" class="dropdown_element" >SAW</a>
                                            <a  href="../sanders.php" class="dropdown_element" >SANDERS</a>
                                            <a  href="../screwdriver.php" class="dropdown_element" >SCREWDRIVER</a>
                                            <a  href="../pliers.php" class="dropdown_element">PLIERS</a>
                                            <a  href="../wrench.php" class="dropdown_element" >WRENCH</a>
                                            <a  href="../box.php" class="dropdown_element" >BOX TOOLS</a>
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
                                    <use xlink:href="../image/sprite.svg#icon-search"></use>
                                </svg>
                                
                            </a>
                            <button class="icon_item" >
                                <svg class="log">
                                    <use xlink:href="../image/sprite.svg#icon-user"></use>
                                </svg>
                                <!-- <?php if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']): ?>
                                    <div id="MyDropdown" class="dropdown_content">
                                        <a  href="./php/logout.php">LOG OUT</a>
                                    </div>
                                <?php endif ?> -->
                                
                                    <div id="MyDropdown" class="dropdown_content">
                                        <a  href="../php/register.php">SIGN UP</a>
                                        <a  href="../php/login.php">SIGN IN</a>
                                    </div> 
                            </button>
                            <a href="#" class="icon_item">
                                <svg>
                                    <use xlink:href="../image/sprite.svg#icon-shopping-basket"></use>
                                </svg>
                                <span id="cart-item">0</span>
                            </a>
                        </div>
                    </nav>
           
            
        </header>
        <!--Fin du header-->
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="table-responsive mt-2"  >
                        <table class="table table-bordered table-striped text-center"  style="height: 55vh; width: 100%;">
                            <thead>
                                <tr>
                                    <td colspan="7">
                                        <h4 class="text-center text-info m-0">Products info</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="font-size:2rem;">ID</th>
                                    <th style="font-size:2rem;">Image</th>
                                    <th style="font-size:2rem;">Name</th>
                                    <th style="font-size:2rem;">Price</th>
                                    <th style="font-size:2rem;">Quantity</th>
                                    <th style="font-size:2rem;">Total Price</th>
                                    <th style="font-size:2rem;">
                                        <a href="../action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure to remove the item')"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $dsn = 'mysql:host=localhost;dbname=registration';
                                    try{
                                        $bdd = new PDO($dsn, 'root', '');
                                        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    }
                                    catch(PDOEXCEPTION $e){
                                        $e->getMessage();
                                    }
                                    $stmnt = $bdd->prepare("SELECT * FROM cart");
                                    
                                    $stmnt->execute();
                                    $grand_total = 0;
                                    while($row = $stmnt->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    
                                    <tr>
                                        <td style="font-size:3rem;"><?=$row["id_cart"]?></td>
                                        <td><img src="../<?=$row["product_image"]?>" width="70" height="69"></td>
                                        <td style="font-size:2rem;"><?=$row["product_name"]?></td>
                                        <td style="font-size:2rem;">Rs<?=$row["product_price"]?></td>
                                        <td ><input type="number" value="<?=$row["qty"]?>" class="form-control itemQty" 
                                        style="width: 75px; text-align:center; font-size:2rem;"></td>

                                       <input type="hidden" class="pid" value="<?=$row["id_cart"]?>">
                                        <input type="hidden" class="pprice" value="<?=$row["product_price"]?>">

                                        <td style="font-size:2rem;">Rs<?=$row["total_price"]?></td>
                                        <td style="font-size:2rem;">
                                            <a href="../action.php?remove=<?= $row['id_cart']?>" class="text-danger" onclick="return confirm('Are you sure to remove the item')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <?php $grand_total += $row["total_price"]?>

                                <?php }?>
                                <tr>
                                    <td colspan="3">
                                        <a href="../index.php" class="btn btn-successs" style="background-color:rgba(0,255,0,1); font-size:2rem;"><i class="fas fa-cart-plus"></i>Continue Shopping</a>
                                    </td>
                                    <td colspan="2">
                                        <b style="font-size:2rem;">
                                            Total Amount
                                        </b>

                                    </td>
                                    <td style=" font-size:2rem;">Rs
                                        <?=number_format($grand_total);?>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info" id="placeOrder" style=" font-size:2rem;"
                                        <?=($grand_total > 1)?"":"disabled"; ?>>
                                        <i class="far fa-credit-card"></i>CheckOut</button>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
        <script type="text/javascript">
            (function($){
                $(document).ready(function(){
                    $(document).on("change", ".itemQty",function(){
                        var el = $(this).closest("tr");
                        var pid = el.find("pid").val();
                        var price = el.find(".pprice").val();
                        var qty = el.find(".itemQty").val();
                        // location.reload(true);
                        $.ajax({
                            url:"action.php",
                            method:"post",
                            cache:false,
                            data:{qty:qty, pid:pid, pprice:pprice},
                            success:function(response){
                                console.log(response);
                            }
                        });
                    });
                    $("#placeOrder").submit(function(e){
                        e.preventDefault();
                        $.ajax({
                            url:"action.php",
                            method="post",
                            data = $("tbody"),
                            success:function(response){

                                $("#showOrder").html(response);
                            }
                        })
                    })
                });
                
            }) ( jQuery );
        </script>

    </body>
</html>
<?php
}
?>