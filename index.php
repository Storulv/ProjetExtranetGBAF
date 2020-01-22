<?php
if(session_start()){

$bdd = new PDO('mysql:host=127.0.0.1;dbname=extranet gbaf;charset=utf8', 'root', '');

$acteurs = $bdd->query('SELECT * FROM acteurs ORDER BY id DESC');
}
else{
  header('Location: signinpage.php');
}
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

  <?php include("header.php"); ?>

</header>

<!-- Corps de page -->

<body>

  <!-- Template -->
    
    <?php while($a = $acteurs->fetch()) { ?>
    <fieldset class="fieldset_acteurs">
        <img class='LogoActeurs' src='<?= $a['Image'] ?>'><?= $a['resume'] ?>
        <a href="template_acteur.php?id=<?= $a['id'] ?>"><button class="infoButton">Afficher la suite</button></a>
    </fieldset>
        <?php } ?>


</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>