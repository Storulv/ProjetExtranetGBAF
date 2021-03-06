<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=extranet gbaf;charset=utf8', 'root', '');

// PHP formulaire de connection

if(isset($_POST['form_connexion'])){
    $username_connect = htmlspecialchars($_POST['username']);
    $password_connect = $_POST['password'];

    // Verif si tout les champs sont remplis
    if(!empty($username_connect) AND !empty($password_connect)){
      // Requêtes de connexion au compte utilisateur existant
      $requser = $bdd->prepare("SELECT * FROM membres WHERE username = ? ");
      $requser->execute(array($username_connect));
      $userexist = $requser->rowCount();
      if($userexist == 1){
        $userinfo = $requser->fetch();
        $password_match = password_verify($password_connect, $userinfo['password']);
        if($password_match){
        session_start();
        $_SESSION['id_user'] = $userinfo['id_user'];
        $_SESSION['username'] = $userinfo['username'];
        $_SESSION['nom'] = $userinfo['nom'];
        $_SESSION['prenom'] = $userinfo['prenom'];
        $_SESSION['password'] = $userinfo['password'];
        $_SESSION['question'] = $userinfo['question'];
        $_SESSION['reponse'] = $userinfo['reponse'];
        header("Location: index.php");
        }
      }
      else{
        $erreur_connect = "Mot de passe ou Username incorrect.";
      }
    }
    else{
      $erreur_connect = "Tout les champs doivent être complétés.";
    }
}

// PHP formulaire d'inscription
if(isset($_POST['form_inscription'])){
  
  $pseudo_insc = htmlspecialchars($_POST['username']);
  $nom_insc = htmlspecialchars($_POST['nom']);
  $prenom_insc = htmlspecialchars($_POST['prenom']);
  $password_insc = password_hash($_POST['password'],PASSWORD_DEFAULT);
  $question_insc = htmlspecialchars($_POST['prenom']);
  $reponse = htmlspecialchars($_POST['prenom']);

  // Verif si tout les champs sont remplis
  if(!empty($_POST['username']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['password']) AND !empty($_POST['question']) AND !empty($_POST['reponse'])){

    // Verification pseudo libre
    $recusername = $bdd->prepare("SELECT * FROM membres WHERE username = ?");
    $recusername->execute(array($pseudo_insc));
    $usernameexist = $recusername->rowCount();
    // si le pseudo est libre
    if($usernameexist==0){

      // Entrée dans la BDD des informations de connection
      $insertmembre = $bdd->prepare("INSERT INTO membres(nom, prenom, username, password, question, reponse) VALUES(?, ?, ?, ?, ?, ?)");
      $insertmembre->execute(array($pseudo_insc, $nom_insc, $prenom_insc, $password_insc, $question_insc, $reponse));
      $idmembre = $bdd->prepare("SELECT LAST_INSERT_ID()");
      $idmembre->execute();
      $membreconnect = $idmembre->fetch();
      $_SESSION["utilisateur_connecte"] = $membreconnect[0];
      
      header('Location: index.php');
      
    
    }

    else{
      $erreur_insc ='Cet Username est déjà utilisé, veuillez en choisir un autre.';
    }

  }
  else{
    $erreur_insc = "Tout les champs doivent être complétés";
  }
}

//PHP Account page management




//var_dump($_POST);
//var_dump("coucou");
//exit;

?>