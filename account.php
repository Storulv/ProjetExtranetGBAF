<?php
session_start();

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

    <?php include("header.php"); ?>

</header>

<!-- Corps de page -->

<body>

  <!-- Parametre du compte -->
    
  <fieldset class="fieldset_center">
  <legend>Gestion de compte</legend>
    
      <form method="post" action="" >
              
        <fieldset class="fieldset_gestion_account">
            <label> Nom : <?php echo $_SESSION['nom'] ?></label>
                <br /><br />
            <label> Prénom : <?php echo $_SESSION['prenom'] ?></label>
                <br /><br />
            
            <div class="new_gestion_account">
                <label for="Pseudo"> Username : <?php echo $_SESSION['username'] ?></label>
                <label for="Pseudo"> Nouveau Username : </label>
                <input type="text" name="update_username">
            </div>
        </fieldset>

        <br /><br />
        
        <fieldset class="fieldset_gestion_account">
            <label> Mot de passe : <?php echo $_SESSION['password'] ?></label>
            <label> Nouveau Mot de passe : </label>
            <input type="password" name="update_password">
        </fieldset>

        <br /><br />
        
        <fieldset class="fieldset_gestion_account">
            <label> Question secrète : <?php echo $_SESSION['question'] ?></label>
            <label> Nouvelle Question secrète : </label>
            <input type="text" name="update_question">
        </fieldset>

        <br /><br />

        <fieldset class="fieldset_gestion_account">
            <label> Réponse à la question secrète : <?php echo $_SESSION['reponse'] ?>
            <label> Nouvelle Réponse à la question secrète : </label>
            <input type="text" name="update_reponse">
        </fieldset>

        <br /><br />
        
        <input type="submit" name="form_update" class="center_button"></input>
        
      </form>

  </fieldset>

</body>

<!-- Pied de page -->

<footer>

    <?php include("footer.php"); ?>

</footer>

</html>