<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

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
            <h1>Promotion</h1>
            <a href="addPromo.php">
                <button class="addButon">Add promotiont</button>
            </a>
            
        </div>
        <hr>
        
        <div>
            <h3>1</h3>
            <table>
                <tr>
                    <td><img src="image/exemple2.jpg" alt="" srcset=""></td>
                    <td>Nom du produit</td>
                    <td>Id du produit</td>
                    
                    <td><button class="delete">Delete</button></td>
                </tr>
            </table>
            <hr>
            <h3>2</h3>
            <table>
                <tr>
                    <td><img src="image/exemple2.jpg" alt="" srcset=""></td>
                    <td>Nom du produit</td>
                    <td>Id du produit</td>
                    
                    <td><button class="delete">Delete</button></td>
                </tr>
            </table>
            <hr>
            <h3>3</h3>
            <table>
                <tr>
                    <td><img src="image/exemple2.jpg" alt="" srcset=""></td>
                    <td>Nom du produit</td>
                    <td>Id du produit</td>
                    
                    <td><button class="delete">Delete</button></td>
                </tr>
            </table>
            <hr>
            <h3>4</h3>
            <table>
                <tr>
                    <td><img src="image/exemple2.jpg" alt="" srcset=""></td>
                    <td>Nom du produit</td>
                    <td>Id du produit</td>
                    
                    <td><button class="delete">Delete</button></td>
                </tr>
            </table>
            <hr>
            <h3>5</h3>
            <table>
                <tr>
                    <td><img src="image/exemple2.jpg" alt="" srcset=""></td>
                    <td>Nom du produit</td>
                    <td>Id du produit</td>
                    
                    <td><button class="delete">Delete</button></td>
                </tr>
            </table>
            <hr>
            <h3>6</h3>
            <table>
                <tr>
                    <td><img src="image/exemple2.jpg" alt="" srcset=""></td>
                    <td>Nom du produit</td>
                    <td>Id du produit</td>
                    
                    <td><button class="delete">Delete</button></td>
                </tr>
            </table>
            <hr>
        </div>
    </main>

</body>
</html>
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
