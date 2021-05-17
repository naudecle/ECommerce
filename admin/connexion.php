
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

    <div class="log">
        <?php if(isset($_GET['error'])){ ?>
            <div align="center" style="margin-bottom:20px;color:red;font-size:15px;">Échec de la connexion, veuillez réessayer</div>
        <?php }?>

        <h1>Login</h1>
        <form action="login.php" method="post">
            <table class="tblConect">
                <tr>
                    <td>Nam :</td>
                    <td><input type="text" name="nom"> </td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name="button"></td>
                </tr>
            </table>
        </form>
    </div>
  
</body>
</html>
<style>
    .log
    {
        background-color: #E3F6F3;
        height: 200px;
        width: 350px;
        position: absolute;
        left: 0;
        top:0;
        bottom: 0;
        right: 0;
        margin: auto;
        border-radius: 15px;
        padding: 50px;
        box-shadow: 2px 2px 12px rgba(0, 0, 0.2, 0.2), -1px -1px 8px rgba(0, 0, 0.2, 0.2);
    }
    .tblConect tr,td
    {
        border: none;
    }
    .tblConect
    {
        font-size: 15px;
    }
</style>
