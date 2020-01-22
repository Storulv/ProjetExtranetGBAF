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
  
  <fieldset class="fieldset_center">
  <legend>Connexion</legend>
    
      <form method="post" action="">
        
        <label for="Pseudo"> Username : </label><input type="text" name="username" required>
        
        <label> Mot de passe : </label><input type="password" name="password" required>

        <input type="submit" name="form_connexion"></input>

      </form>
    
  </fieldset>
  

  <?php 
  if(isset($erreur_connect)){
    echo '<font color="red">'.$erreur_connect.'</font>';
  }
  ?>

  <!-- Formulaire d'inscription -->

  <fieldset class="fieldset_center">
  <legend>Inscription</legend>
    
      <form method="post" action="" >
              
        <label> Nom : </label>
        <input type="text" name="nom" required>
      
        <label> Prénom : </label>
        <input type="text" name="prenom" required>
        
        <label for="Pseudo"> Username : </label>
        <input type="text" name="username" required>
        <br /><br />
        <label> Mot de passe : </label>
        <input type="password" name="password" required>

        <label> Question secrète : </label><input type="text" name="question" required>
      
        <label> Réponse à la question secrète : </label><input type="text" name="reponse" required>
  
        <input type="submit" name="form_inscription"></input>
        
      </form>

  </fieldset>
  
  <?php 
  if(isset($erreur_insc)){
    echo '<font color="red">'.$erreur_insc.'</font>';
  }
  ?>

  <!-- Formulaire de récupération -->

  <fieldset class="fieldset_center">
  <legend>Identifiant ou mot de passe oublié</legend> 
    
      <form method="post" action="">
      
        <label> Question secrète : </label><input type="text" name="question" required>
      
        <label> Réponse à la question secrète : </label><input type="text" name="reponse" required>

        <input type="submit" name="form_recup"></input>
      </form>
  </fieldset>
  

</body>

<!-- Pied de page -->

<footer>

<?php include("footer.php"); ?>

</footer>

</html>