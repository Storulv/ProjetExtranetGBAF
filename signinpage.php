<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=extranet gbaf;charset=utf8', 'root', '');
include("traitement.php");
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

  <!-- Formulaire de connection -->

  <form method="post" action="">
    <p>
      <fieldset>
        <legend>Connexion</legend>
        
        <label for="Pseudo"> Username : </label><input type="text" name="username" required>
        
        <label> Mot de passe : </label><input type="password" name="password" required>

        <input type="submit" name="form_connexion"></input>

      </fieldset>
    </p>

  </form>

  <?php 
  
  if(isset($erreur_connect)){
    echo '<font color="red">'.$erreur_connect.'</font>';
  }
  
  ?>

  <!-- Formulaire d'inscription -->

  <form method="post" action="">
    <p>
      <fieldset>
        <legend>Inscription</legend>
        
        <label> Nom : </label>
        <input type="text" name="nom" required>
      
        <label> Prénom : </label>
        <input type="text" name="prenom" required>
        
        <label for="Pseudo"> Username : </label>
        <input type="text" name="username" required>
        
        <label> Mot de passe : </label>
        <input type="password" name="password" required>

        <label> Question secrète : </label><input type="text" name="question" required>
      
        <label> Réponse à la question secrète : </label><input type="text" name="reponse" required>

        <input type="submit" name="form_inscription"></input>
      </fieldset>
    
  </form>

  <?php 
  
  if(isset($erreur_insc)){
    echo '<font color="red">'.$erreur_insc.'</font>';
  }
  
  ?>

  <!-- Formulaire de récupération -->

  <form method="post" action="">
    <p>
      <fieldset>
        <legend>Identifiant ou mot de passe oublié</legend>

        <label> Question secrète : </label><input type="text" name="question" required>
      
        <label> Réponse à la question secrète : </label><input type="text" name="reponse" required>

        <input type="submit" name="form_recup"></input>
      </fieldset>
    </p>

  </form>

</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>