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

    $select_stmt=$bdd->prepare("SELECT CONCAT(product_name,'(','qty,')') AS ItemQty, total_price FROM cart");
    $select_stmt->execute();
    while($)
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
        <div class="container">
            <h2>Merci pour votre commande</h2><>
        </div>
    </body>

</html>
    