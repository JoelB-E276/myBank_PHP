<?php 
session_start();
 if(isset($_SESSION["user"]))
 {
    require "model/connexion.php";
    require "model/clientModel.php";
    require "model/entity/client.php";
    require "model/entity/compte.php";
    require "model/operationModel.php";
    require "model/entity/operation.php";

       /*var_dump($_GET["nCompte"]);
       var_dump($_SESSION["user"]);*/

    $client = new Client($_SESSION["user"]);
    $compte = new Compte();
    $operations = new Operation();
    $compte -> setId_compte($_GET["nCompte"]);
    $operationModel = new OperationModel();
    $details = $operationModel -> getDetails($compte->getId_compte());


} else 
    {
        header("Location:login.php");
        exit;
    }
    
require "view/compteView.php";
