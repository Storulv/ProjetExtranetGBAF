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

  <!-- Formulaire d'inscription -->

  <form method="post" action="traitement.php">
    <p>
      <fieldset>
        <legend>Récupération de compte</legend>

        <label>Question secrète : </label><input type="text" name="Question secrète">
      
        <label>Réponse à la question secrète : </label><input type="text" name="Réponse à la question secrète">
      </fieldset>
    </p>

    <a href="signuppage.php" class="lien_log">Devenir membre</a>
    <a href="signinpage.php" class="lien_log">Déjà membre ?</a>
  
</form>

</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>