
<?php   
require "model/connexion.php";
require "model/clientModel.php";

    if(isset($_POST["login"]) && isset($_POST["password"])) {
      $user = getLogin($db, $_POST["login"]);
      var_dump($user);
      // On vérifie que l'email exit en bdd lors de la requête
      if($user){
              //on verif le mot de passe
          if(password_verify($_POST["password"], $user["c_password"])) { // vérifie qu'un des hashages possible du mdp correspond
              // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index /
              session_start();
              $_SESSION["user"] = $user;
              $_SESSION["id"] = $id;
              header("Location:index.php");
              exit;
              }
          // Si les données rentrées dans le formulaire ne sont pas les bonnes
          } 
         echo "Identifiants invalides";   
     
  }

require "view/loginView.php";


