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
    $requser = $bdd->query('SELECT * FROM product WHERE product_cat like "saw" ');
    $requser1 = $bdd->query('SELECT * FROM product WHERE product_cat like "screwdriver" ');
    $requser2 = $bdd->query('SELECT * FROM product WHERE product_cat like "sanders" ');
    $requser3 = $bdd->query('SELECT * FROM product WHERE product_cat like "pliers" ');
    $requser4 = $bdd->query('SELECT * FROM product WHERE product_cat like "wrench" ');
    $requser5 = $bdd->query('SELECT * FROM product WHERE product_cat like "box" ');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <style type="text/css" media="screen">
        .headProduit
        {
            display: flex;
            width: 100%;
        
        }
        .addButon
        {
            position: absolute;
            right: 10px;
            background: rgb(2, 260, 20);
            top: 10px;
            border: none;
            width: auto;
            height: 30px;
            font-size: 14px;
            border-radius: 1px;
            border-color: rgb(2, 260, 20);
            cursor: pointer;
        }
        .catSelect
        {
            display: grid;
        }
        select
        {
            position: relative;
            
        }
        .delete
        {
            background-color: #FF4221;
        }
        .promoButon
        {
            position: absolute;
            right: 100px;
            background: #85C1E9;
            top: 10px;
            border: none;
            width: auto;
            height: 30px;
            font-size: 14px;
            border-radius: 1px;
            border-color: rgb(2, 260, 20);
            cursor: pointer;
        }
    </style>

    <title>Eloctro Tolls managment</title>
</head>
<body>
    <header>
        <div class="point-dr">
            <h3>ADMIN <span>ELECTRO TOOLS</span></h3>
        </div>

    </header>


    <div class="side-bar">
        <a href="cms.php"><img src="image/homeIco.ico" height="30" width="30"> <span>Home</span></a>
        <a href="orders.php"><img src="image/ordersIco.ico" height="30" width="30"> <span>Orders</span></a>
        <a href="produit.php"><img src="image/produitIco.ico" height="30" width="30"> <span>Produits</span></a>
        <a href="deconnexion.php"><img src="image/off.ico" height="30" width="30"> <span>Logout</span></a>
    </div>
    <main>
        <div class="headProduit">
            <h1>All product</h1>
            <a href="addProduct.php">
                <button class="addButon">Add product</button>
            </a>
            <a href="promo.php">
                <button class="promoButon">Promotion</button>
            </a>
        </div>
        <hr>
        <div class="catSelect">
            <h2>Categorie : </h2>
            <select name="selectCat" id="">
                <option value="" disabled selected>Choice ...</option>
                <option value="saw">Saw</option>
                <option value="screwdriver">Screwdriver</option>
                <option value="sanders">Sanders</option>
                <option value="pliers">Pliers</option>
                <option value="wrench">Wrench</option>
                <option value="box tools">Box Tools</option>
            </select>
        </div>
        <hr>
        <div>
            
            <h3>Saw</h3>
            <table>
                <?php while($produit = $requser->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr>
                        <td><img src="../<?=$produit['product_image']?>" alt="" srcset=""></td>
                        <td><?=$produit['product_name']?></td>
                        <td><?=$produit['id_product']?></td>
                        <td><a href="view.php">View</a></td>
                        <td><button class="delete">Delete</button></td>
                    </tr>
                <?php }?>
            </table>
            <hr>
            <h3>Screwdriver</h3>
            <table>
                <?php while($produit = $requser1->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr>
                        <td><img src="../<?=$produit['product_image']?>" alt="" srcset=""></td>
                        <td><?=$produit['product_name']?></td>
                        <td><?=$produit['id_product']?></td>
                        <td><a href="view.php">View</a></td>
                        <td><button class="delete">Delete</button></td>
                    </tr>
                <?php }?>
            </table>
            <hr>
            <h3>Sanders</h3>
            <table>
                <?php while($produit = $requser2->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr>
                        <td><img src="../<?=$produit['product_image']?>" alt="" srcset=""></td>
                        <td><?=$produit['product_name']?></td>
                        <td><?=$produit['id_product']?></td>
                        <td><a href="view.php">View</a></td>
                        <td><button class="delete">Delete</button></td>
                    </tr>
                <?php }?>
            </table>
            <hr>
            <h3>Pliers</h3>
            <table>
                <?php while($produit = $requser3->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr>
                        <td><img src="../<?=$produit['product_image']?>" alt="" srcset=""></td>
                        <td><?=$produit['product_name']?></td>
                        <td><?=$produit['id_product']?></td>
                        <td><a href="view.php">View</a></td>
                        <td><button class="delete">Delete</button></td>
                    </tr>
                <?php }?>
            </table>
            <hr>
            <h3>Wrench</h3>
            <table>
                <?php while($produit = $requser4->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr>
                        <td><img src="../<?=$produit['product_image']?>" alt="" srcset=""></td>
                        <td><?=$produit['product_name']?></td>
                        <td><?=$produit['id_product']?></td>
                        <td><a href="view.php">View</a></td>
                        <td><button class="delete">Delete</button></td>
                    </tr>
                <?php }?>
            </table>
            <hr>
            <h3>Box tools</h3>
            <table>
                <?php while($produit = $requser5->fetch(PDO::FETCH_ASSOC)){ ?>

                    <tr>
                        <td><img src="../<?=$produit['product_image']?>" alt="" srcset=""></td>
                        <td><?=$produit['product_name']?></td>
                        <td><?=$produit['id_product']?></td>
                        <td><a href="view.php">View</a></td>
                        <td><button class="delete">Delete</button></td>
                    </tr>
                <?php }?>
            </table>
            <hr>
        </div>
    </main>

</body>
</html>
<?php
} 
?>
