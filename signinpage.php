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

  <!-- Formulaire de connection -->

  <form method="post" action="traitement.php">
    <p>
      <fieldset>
        <legend>Vos identifiants</legend>
        
        <label for="Pseudo">Pseudo : </label><input type="text" name="Pseudo">
        
        <label>Mot de passe : </label><input type="password" name="Mot de passe">
      </fieldset>
    </p>

    <a href="signuppage.php">Devenir membre</a>
    <a href="forgetid.php" >Identifiant ou mot de passe oublié ?</a>
  </form>

</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>