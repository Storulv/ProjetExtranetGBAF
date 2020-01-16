<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=extranet gbaf;charset=utf8', 'root', '');
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>

<!-- En-tête de page -->

<header>
  <a href="index.php">
  <img class="Logo_GBAF" src="img/logogbaf2.png" alt="logo GBAF" />
  </a>  

  <?php 
    if($_GET['id_user'] AND $_GET['id_user'] > 0){
      $getid_user = intval($_GET['id_user']);
      $requser = $bdd->prepare('SELECT * FROM membres WHERE id_user = ?');
      $requser->execute(array($getid_user));
      $userinfo = $requser->fetch();
      
    }
    else{
     // header('location : 127.0.0.1/ProjetExtranetGBAF/signinpage.php');
    }
  ?>

  <p><img class='avatar' src="img/default_avatar.png" alt="avatar"><?php echo $userinfo['nom, prenom'] ?></p>
  


</header>
