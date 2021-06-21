<?php 
    require "model/connexion.php";
    require "model/clientModel.php";
    require "model/compteModel.php";
    require "model/entity/client.php";
    require "model/entity/compte.php";
    require "model/operationModel.php";
    require "model/entity/operation.php";
session_start();
/*var_dump($_SESSION["user"]);*/

if(isset($_SESSION["user"])){
 
   
 } else
    {
      header("Location:login.php");
      exit;
    }
    ////////////  IN PROGRESS  ////////////
    // ajouter id_client dans setter
  

  
if(!empty($_POST))
{
  if(isset($_POST ["solde_compte"]) && isset($_POST ["type_compte"]) && isset($_POST ["nom"]))
  {   
      $compte = new Compte($_POST);
      $compte->setNumero_compte("546231");
      $compte->setId_client($_SESSION["user"]->getId());
      $modelAccount = new AccountModel();
      $addAccount = $modelAccount -> addAccount($compte); 
   var_dump($compte);

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
