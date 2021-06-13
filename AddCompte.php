<?php 
session_start();
/*var_dump($_SESSION["user"]);*/

if(isset($_SESSION["user"])){
     require "model/connexion.php";
     require "model/clientModel.php";
     require "model/compteModel.php";
     require "model/entity/client.php";
     require "model/entity/compte.php";
     require "model/operationModel.php";
     require "model/entity/operation.php";
   
 } else
    {
      header("Location:login.php");
      exit;
    }
    ////////////  IN PROGRESS  ////////////
    // ajouter id_client dans setter
    
    $client = new Client($_SESSION["user"]);
    $account = new AccountModel;
    $compte = new Compte($_POST);
    $compte -> setSolde_compte($_POST["montant"]);
    $addAccount = $account -> addAccount($compte); 


  /* 
if(!empty($_POST))
{
  if(isset($_POST ["montant"]) && isset($_POST ["type_compte"]) && isset($_POST ["nom"]))
  {
    var_dump($_POST);
      $newAccount = new AccountModel($_POST);
      $addAccount = $newAccount -> addAccount($_POST);

  }
}
  function formatData($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }*/

require "view/addCompteView.php";

/*

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
  }*/
  ?>
