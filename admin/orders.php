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
        <h1>All orders</h1>
        <hr>

        <table class="tablePr">
            <thead>
                <tr id="header">
                    <th>Nam</th>
                    <th>Mail</th>
                    <th>number of products</th>
                    <th>Price</th>
                    <th>order date</th>
                </tr>
            </thead>
            <!--contenus du tableau-->
            <tbody>
                <tr>
                    <td><a href="ordersElement.php"> mon nom</a></td>
                    <td>mon adresse mail</td>
                    <td>12</td>
                    <td>1235<span> Rs</span></td>
                    <td>12/12/1999</td>
                </tr>
            </tbody>
        </table>
    </main> 
    <div></div>  
    
</body>
<script>
    document.addEventListener("DOMConttentLoaded", () => {

        const rows = document.querySelectorAll("tr[data-href]");

        rows.forEach(row => {
            row.addEventListener("click", () => {
                window.location.href = row.dataset.href;
            });
        });
    });
</script>
</html>