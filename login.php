
<?php   
require "model/connexion.php";
require "model/clientModel.php";
require "model/entity/client.php";


 if(isset($_POST["c_email"]) && isset($_POST["c_password"]))
  { 
    
    $user = new clientModel(); 
    $client = $user->getLogin($_POST["c_email"]);
   
      if($client)
      { 
          if(password_verify($_POST["c_password"], $client->getC_password()))
          { 
            session_start();
            $_SESSION["user"] = $client;// $ session = objet client de getlogin Ligne12
            $_SESSION["id"] = $sessionId;
            header("Location:index.php");
            exit;
          }
      }
          echo "Identifiants invalides";   
     
 }

require "view/loginView.php";

