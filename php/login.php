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

    if(isset($_POST['connected'])){
        $mailconnect = htmlspecialchars($_POST['mailconnect']);
        $psdconnect = sha1($_POST['passwordconnect']);
        if(!empty($mailconnect) AND !empty($psdconnect)){
            $requser = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            $requser->execute(array($mailconnect, $psdconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1){
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['username'] = $userinfo['username'];
                $_SESSION['email'] = $userinfo['email'];
                header('Location: ../index.php?id='.$_SESSION['id']);
            }
            else{
                $erreur = "*Email or Password Invalid*";
            }

        }
        else{
           $erreur = "*Complete all the fields*";;
        }
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
        <link rel="stylesheet" href="css/stylesheet.css">

        <style>
                :root{
            --primaryColor: #f1f1f1;
            --yellow: #ffcc00;
            --black: #222;
            --grey: #666;
            --black1: #000;
            --SecondaryColor: #2b1f4d;
            --bleu: #0ff;
            --red: #f00;

            }


            *,*::before, ::after
            {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
            }
            html{
                font-size: 62.5%;
                box-sizing: border-box;
            }

            body,
            input{
                font-size: 1.6cm;
                font-weight: 400;
                font-family: 'Archivo', sans-serif;
                color: var(--black);
            }
            span,p{
                
                    font-size: .6cm;
                    font-weight: 400;
                    font-family: 'Archivo', sans-serif;
                    color: var(--black);
                
            }
            a{
                text-decoration: none;
            }

            ul{
                list-style: none;
            }
            img{
                max-width: 100%;
                
            }
            h3,h4{
                font-weight: 500;
            }
            .popup{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, .4);
            
            background-size: cover;
            transition: 0.3s;
            
            
        
            }

            .popup_content{
                position: absolute;
                top: 50%;
                left: 50%;
                width: 30%;
                height: 50rem;
                transform: translate(-50%, -50%);
                padding: 1.6rem;
                display: table;
                overflow: hidden;
                background-color: rgba(255,255,255,1);
                border-radius: 1rem;
                
                
                
                
            }



            .popup_left{
                display: table;
                width: 100%;
                vertical-align: middle;
                
                
            }
            .left_content{
                text-align: left;
                width: 80%;
                vertical-align: middle;
                
            }
            .left_content h1{
                font-size: 3rem;
                color: #000;
                top: 5rem;
                text-align: center ;
                background-position: center; 
                background-image: url('<?php echo '../css/back.jpg'; ?>');
                background-repeat: no-repeat;
                background-size: 40%;
                
            }
            .popup_label{
                font-size: 1.9rem;
                color: #000;
                text-transform: uppercase;
                background-image: url('<?php echo '../css/back.jpg'; ?>');
                background-repeat: repeat-x;
                background-size: 70%;
                background-position: center; 
            }
            .popup_form{
                width: 50%;
                text-indent: 1rem;
                background-color: white;
            }
            .popup_form:focus{
                outline: none;
            }
            input[type="text"]{
                font-size: 2.6rem;
                font-weight: 100;
                color: #000;
                width: 100%;
            }
            input[type="email"]{
                font-size: 2.6rem;
                font-weight: 100;
                color: #fff;
                width: 100%;
            }
            input[type="password"]{
                font-size: 2.6rem;
                font-weight: 100;
                color: #000;
                width: 100%;
            }
            input[type="submit"]{
                font-size: 2.5rem;
                color: #000;
                border: 2px solid var(--black1);
                text-transform: uppercase;
            }
            input[type="submit"]:hover{
                background-color: var(--yellow);
            }
            span{
                display: flex;
                font-size: 1.5rem;
                color: blue;
            }
            a{
                font-size: 1.5rem;
                color: blue;
            }
            a:hover{
                color: var(--bleu)
            }
            .error{
                display: flex;
                font-size: 1.7rem;
                font-weight: 600;
                color: red;
            }

            
        </style>
    </head>
    <body>
        <!-- pop Up -->
        <div class="popup hidden_popup">
            <div class="popup_content">
                <div class="popup_left">
                    <div class="left_content">
                        <h1>SIGN IN</h1>
                        <form action="#" method="POST">
                            <label for="email" class="popup_label">Adress e-mail</label>
                            <input type="email" class="popup_form" name="mailconnect" placeholder="Enter your email...."> <br/>
                            <label for="psword" class="popup_label">Password</label>
                            <input type="password" class="popup_form" name="passwordconnect" placeholder="Enter your password..."> <br/>
                            <input type="submit" name="connected" value="Log IN">
                            <span>Don't have account? <a href="register.php">Sign Up</a></span>
                            
                        </form>
                        <div class="error">
                            <?php 
                                if(isset($erreur)){
                                    echo $erreur;
                                }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--GlideJS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

        <!--Animation scrolling-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!--script-->
        <script src="./js/index.js"></script>
        <script src="./js/main.js"></script>
        <script src="./js/product.js"></script>
        <script src="./js/slide.js"></script>
        <script type="text/javascript" src="./js/jquery.js"></script>
    </body>
</html>
        
        