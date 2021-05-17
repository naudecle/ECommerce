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
    
    if(isset($_POST["pid"]) && isset($_POST["pname"]) && isset($_POST["pPrice"]) && isset($_POST["pimage"]) && isset($_POST["pcat"]) && isset($_POST["pcode"])){
        $pid = $_POST["pid"];
        $pname = $_POST["pname"];
        $pPrice = $_POST["pPrice"];
        $pimage = $_POST["pimage"];
        $pcat = $_POST["pcat"];
        $pcode = $_POST["pcode"];
        $pqty = 1;
        $ptotal = $pqty * $pPrice;
        

        //check if the product is already in the cart
         $stmt = $bdd->prepare("SELECT product_code FROM cart WHERE product_code=:code");
         $stmt->execute(array(":code"=>$pcode));
        
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        $check_code = $r["product_code"];

        if(!$check_code){
            $requser = $bdd->prepare("INSERT INTO cart (id_cart,product_name,product_cat,product_price,product_image, product_code,qty,total_price) VALUES (:id,:noun,:cat,:price,:img,:code,:qty,:totprice)");
            $requser->bindParam(":id",$pid);
            $requser->bindParam(":noun",$pname);
            $requser->bindParam(":cat",$pcat);
            $requser->bindParam(":price",$pPrice);
            $requser->bindParam(":img",$pimage);
            $requser->bindParam(":code", $pcode);
            $requser->bindParam(":qty",$pqty);
            $requser->bindParam(":totprice",$ptotal);
            $requser->execute();
            $msg = require_once ('./php/alert.php') ;

            echo $msg;
           
        }
        else{
            echo '<div class="alert alert-success alert-dismissible mt-2">
            
            <strong>Item Already in your cart!</strong>
            </div>';
        }
           
        

    }
    //to incremente the span or the number of the basket icon
    if(isset($_GET["cartTotal"]) && isset($_GET["cartTotal"]) == "cart_total"){
        $stmt = $bdd->prepare("SELECT * FROM cart");
        $stmt->execute();
        
        $row = $stmt->rowCount();
        echo $row;
    }

    if(isset($_GET["cartItem"]) && isset($_GET["cartItem"]) == "cart-item"){
        $stmt_cart = $bdd->prepare("SELECT * FROM cart");
        $stmt_cart->execute();
        
        $row_cart = $stmt_cart->rowCount();
        echo $row_cart;
    }
    //to remove items one by one
    if(isset($_GET['remove'])){
        $id = $_GET['remove'];

        $stmt = $bdd->prepare("DELETE FROM cart WHERE id_cart=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = "Item removed from the cart!";
        header('location:./php/cart.php');
    }
//remove all the items in the cart
    if(isset($_GET['clear'])){
        $stmt = $bdd->prepare("DELETE FROM cart");
        $stmt->execute();
        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = "YOUR CART IS CLEAN";
        header('location:./php/cart.php');
    }
// to update the cart
    if(isset($_POST['qty'])){
        $quantity = $_POST["qty"];
        $id = $_POST["pid"];
        $pprice = $_POST["pprice"];

        $totalprice = $quantity * $pprice;

        $update_stmt= $bdd->prepare("UPDATE cart SET qty=:quanty, total_price=:ttl_price WHERE id_cart=:cid");
        $update_stmt->bindParam(":cid",$id);
        $update_stmt->bindParam(":ttl_price",$totalprice);
        $update_stmt->bindParam(":quanty",$quantity);
        
        $update_stmt->execute();
    }
?>