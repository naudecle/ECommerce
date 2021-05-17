<?php 
    $dsn = 'mysql:host=localhost;dbname=registration';
    try{
        $bdd = new PDO($dsn, 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOEXCEPTION $e){
        $e->getMessage();
    }
    if(isset($_POST['register'])){
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password_1 = sha1($_POST['password_1']);
        $password_2 = sha1($_POST['password_2']);


        if(!empty($_POST['username']) AND  !empty($_POST['email']) AND  !empty($_POST['password_1']) AND  !empty($_POST['password_2']))
        { 
        $usernamelength = strlen($username);
            if(($usernamelength) <= 255){
                $maillength = strlen($username);
                if(($maillength) <= 255){

                    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $reqmail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
                        $reqmail->execute(array($email));
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0){
                            if($password_1 == $password_2){
                                $insertUser = $bdd->prepare("INSERT INTO users(username, email, password) VALUES (?,?,?)");
                                $insertUser->execute(array($username, $email,$password_1));
                                // $_SESSION['created'] = "ACCOUNT CREATED";
                                header('Location: login.php');
                            }
                            else{
                                $erreur = "*PassWords not matched*";
                            }
                        }
                        else{
                            $erreur = "Email already exist";
                        }
                    
                    }
                    else{
                        $erreur = "*Invalid Email*";
                    }
                
                }
                else{
                    $erreur = "*Email adress is more than 255 characters*";
                }    
            }
            else{
                $erreur = "*Username is more than 255 characters*";
            }
        
            
        }
        else{
            $erreur = "*Complete all the fields*";
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
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, .3);
            z-index: 9999;
            transition: 0.3s;
            background-image: url('./image/back.jpg');
            
        
            }

            .popup_content{
                position: fixed;
                top: 50%;
                left: 50%;
                width: 40%;
                margin: 0 auto;
                height: 10rem;
                transform: translate(-50%, -50%);
                padding: 1.6rem;
                display: table;
                overflow: hidden;
                background-color: rgba(255,255,255);
                border-radius: 1rem;
                
                
            }

            .popup_right{
                display: table;
                width: 100%;
                vertical-align: middle;
                padding: 2rem 5rem;
                
            }
            .right_content{
                text-align: left;
                width: 60%;
                top:10%;
                
            }
            .right_content h1
            {
                font-size: 3rem;
                color: #000;
                top: 5rem;
                text-align: right;
                background-position: center; 
                background-image: url('<?php echo '../css/back.jpg'; ?>');
                background-repeat: no-repeat;
                background-size: 40%;
                
            }

            .popup_label{
                font-size: 2rem;
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
                margin-top: 2%;
            }
            .popup_form:focus{
                outline: none;
            }
            input[type="text"]{
                font-size: 2.6rem;
                font-weight: 100;
                color: #000;
                width: 150%;
            }
            input[type="email"]{
                font-size: 2.6rem;
                font-weight: 100;
                color: #000;
                width: 150%;
            }
            input[type="password"]{
                font-size: 2.6rem;
                font-weight: 100;
                color: #000;
                width: 150%;
            }
            input[type="submit"]{
                font-size: 2.5rem;
                color: #000;
                border: 2px solid var(--black);
                text-transform: uppercase;
            }
            input[type="submit"]:hover{
                background-color: var(--yellow);
            }
            span{
                display: flex;
                font-size: 1.7rem;
                color: blue;
            }
            a{
                font-size: 1.7rem;
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
                <div class="popup_right">
                    <div class="right_content">
                        <h1>SIGN UP</h1>
                        <form action="#" method="POST">
                            <label for="name" class="popup_label">Name</label>
                            <input type="text" class="popup_form" name="username"  placeholder="Name"> <br/>
                            <label for="email" class="popup_label">Email</label>
                            <input type="email" class="popup_form" name="email"  placeholder="Enter your email...."> <br/>
                            <label for="psword" class="popup_label">Password</label>
                            <input type="password" class="popup_form" name="password_1" placeholder="Enter password..."> <br/>
                            <label for="cpsword" class="popup_label">Confirm Password</label>
                            <input type="password" class="popup_form" name="password_2" placeholder="Confirm password..."> <br/>
                            <input type="submit" name="register" value="SIGN UP">
                            <span>Already a member? <a href="login.php">Sign In</a></span>
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
        
        <script>
        
        
        
        </script>

    </body>
</html>
        
        