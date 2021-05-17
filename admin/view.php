
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
        <h1>view and modification of data</h1>
        <hr>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>Categorie :</td>
                    <td>
                        <select name="selectCat" id="">
                            <option value="" disabled selected>Choice ...</option>
                            <option value="saw">Saw</option>
                            <option value="screwdriver">Screwdriver</option>
                            <option value="sanders">Sanders</option>
                            <option value="pliers">Pliers</option>
                            <option value="wrench">Wrench</option>
                            <option value="box tools">Box Tools</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Id :</td>
                    <td><input type="number" name="" id=""></td>
                </tr>
                <tr>
                    <td>Prix :</td>
                    <td><input type="number" name="" id=""></td>
                </tr>
                <tr>
                    <td>Image :</td>
                    <td><input type="file" src=""  accept="image/*"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>
