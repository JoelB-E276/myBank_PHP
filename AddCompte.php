<?php 
session_start();
var_dump($_SESSION["user"]);

if(isset($_SESSION["user"])){
     require "model/connexion.php";
     require "model/clientModel.php";
     require "model/entity/client.php";
     require "model/entity/compte.php";
     require "model/operationModel.php";
     require "model/entity/operation.php";
   
 } else
    {
      header("Location:login.php");
      exit;
    }

if(!empty($_POST))
{
  if(isset($_POST ["montant"]) && isset($_POST ["date_ouv"]) && isset($_POST ["type_compte"]))
  {
      formatData($data);
      addCompte($db,$_SESSION["user"]["id"]);

  }
}
  function formatData($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

require "view/addCompteView.php";

  ?>
