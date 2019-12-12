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
        <legend>Vos informations</legend>
        
        <label>Nom : </label>
        <input type="text" name="Nom">
      
        <label>Prénom : </label>
        <input type="text" name="Prénom">

      </fieldset>

      <fieldset>
        <legend>Vos identifiants</legend>
        
        <label for="Pseudo">Pseudo : </label>
        <input type="text" name="Pseudo">
        
        <label>Mot de passe : </label>
        <input type="password" name="Mot de passe">

      </fieldset>
      
      <fieldset>
        <legend>Récupération de compte</legend>

        <label>Question secrète : </label>
        <input type="text" name="Question secrète">
      
        <label>Réponse à la question secrète : </label>
        <input type="text" name="Réponse à la question secrète">
        
      </fieldset>
    </p>
    
    <a href="signinpage.php">Déjà membre ?</a>
    <a href="forgetid.php" >Identifiant ou mot de passe oublié ?</a>
</form>

</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>