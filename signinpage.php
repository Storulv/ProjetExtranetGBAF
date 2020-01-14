<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=extranet gbaf;charset=utf8', 'root', '');

if(isset($_POST['form_inscription'])){
  
  $pseudo_insc = htmlspecialchars($_POST['pseudo_insc']);
  $nom_insc = htmlspecialchars($_POST['nom_insc']);
  $prenom_insc = htmlspecialchars($_POST['prenom_insc']);
  $mdp_insc = password_hash($_POST['mdp_insc'],PASSWORD_DEFAULT);

  if(!empty($_POST['pseudo_insc']) AND !empty($_POST['nom_insc']) AND !empty($_POST['prenom_insc']) AND !empty($_POST['mdp_insc'])){
  }
  else{
    $erreur_insc = "Tout les champs doivent être complétés";
  }
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

  <!-- Formulaire de connection -->

  <form method="post" action="">
    <p>
      <fieldset>
        <legend>Connexion</legend>
        
        <label for="Pseudo"> Pseudo : </label><input type="text" name="Pseudo">
        
        <label> Mot de passe : </label><input type="password" name="Mot de passe">

        <input type="submit" name="form_connexion"></input>

      </fieldset>
    </p>

  </form>

  <!-- Formulaire d'inscription -->

  <form method="post" action="">
    <p>
      <fieldset>
        <legend>Inscription</legend>
        
        <label> Nom : </label>
        <input type="text" name="nom_insc">
      
        <label> Prénom : </label>
        <input type="text" name="prenom_insc">
        
        <label for="Pseudo"> Pseudo : </label>
        <input type="text" name="pseudo_insc">
        
        <label> Mot de passe : </label>
        <input type="password" name="mdp_insc">

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

        <label> Question secrète : </label><input type="text" name="Question secrète">
      
        <label> Réponse à la question secrète : </label><input type="text" name="Réponse à la question secrète">

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