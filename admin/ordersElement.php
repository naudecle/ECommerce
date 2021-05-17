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
        <div class="tete">
            <h2>Nom du client &nbsp;</h2>
            <h2> | mailDu@clinet &nbsp;</h2>
            <h2> | Qte : 5 &nbsp;</h2>
            <h2> | Total : <span>500</span> Rs &nbsp;</h2>
            <h2> | Order date : 21/12/1999</h2>
        </div>
        <hr>

        <table class="table2">
            <tr id="header">
              <th>#</th>
              <th>Nam of product</th>
              <th>Id products</th>
              <th>Categorie</th>
              <th>Number of product</th>
            </tr>
            <!--contenus du tableau-->
            <tr >
                <td><img src="image/exemple.jpg" alt="" srcset=""> </td>
                <td>Tourne vise</td>
                <td>12</td>
                <td>outils a main</td>
                <td>3</td>
            </tr>
           
            
        </table>
    </main> 
    <style>

    </style>  
    
</body>
</html>