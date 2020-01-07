<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=extranet gbaf;charset=utf8', 'root', '');

if(isset($_GET['id']) AND !empty($_GET['id'])) {
  $get_id = htmlspecialchars($_GET['id']);
  $acteurs = $bdd->prepare('SELECT * FROM acteurs WHERE id = ?');
  $acteurs->execute(array($get_id));
  
  if($acteurs->rowCount() == 1) {
    $acteurs = $acteurs->fetch();
    $titre = $acteurs['Image'];
    $contenu = $acteurs['Description'];
 } else {
    die('Cet article n\'existe pas !');
 }
} else {
 die('Erreur');
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

  <img class="logo_acteur_main" src='<?php echo $titre?>'/>

  <fieldset>
    <?php
      echo $contenu;
    ?>
  </fieldset>


</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>