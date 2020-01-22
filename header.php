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

  <div class="logo_membre">
  <?php 
    if(!empty($_SESSION["id_user"])){
  ?>
  <p>
    <a href="account.php"><img class='avatar' src="img/default_avatar.png" alt="avatar"></a><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']?>
  </p>
  <form action="logout.php">
    <input type="submit" value="Déconnexion">
  </form>

  <?php } ?>
  </div>

</header>