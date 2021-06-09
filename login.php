
<?php   
require "model/connexion.php";
require "model/clientModel.php";
require "model/entity/client.php";
$connect = new Connexion();
$connect->connect();

session_start();


 if(isset($_POST["c_email"]) && isset($_POST["c_password"]))
 {
    $user = new clientModel(); 
    $client = new Client($_POST);
    $client = $user->getLogin($_POST["c_email"]);

    if($user)
    { 
      if(password_verify($_POST["c_password"], $client->getC_password()))
        { 
              session_start();
              $_SESSION["user"] = $user;
              $_SESSION["id"] = $id;
              header("Location:index.php");
              exit;
        }
    }
         echo "Identifiants invalides";   
     
 }

require "view/loginView.php";

