<?php
  session_start();

  $bdd = new PDO('mysql:host=127.0.0.1;dbname=e_commerce','root', '');

  if(isset($_POST['button']))
  {
    $nom = htmlspecialchars($_POST['nom']);
    $password = $_POST['password'];

    

    if(!empty($nom) AND !empty($password))
    {
        $requser = $bdd->prepare("SELECT * FROM admis WHERE nom = ? AND admi_password = ?");
        $requser->execute(array($nom, $password));

        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['nom'] = $userinfo['nom'];
            //a modifire pour mettre admis
            header('Location: /Projet_PWB/cms.php');
        }
        else
        {
            header("Location: connexion.php?error=connexion echoue!");
        }
    }
    else
    {
        header("Location: connexion.php?error=connexion echoue!");
    }
  }
?>
