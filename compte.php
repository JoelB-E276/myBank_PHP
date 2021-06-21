<?php 
   require "model/connexion.php";
   require "model/clientModel.php";
   require "model/entity/client.php";
   require "model/entity/compte.php";
   require "model/operationModel.php";
   require "model/entity/operation.php";

   session_start();
   
 if(isset($_SESSION["user"]))
 {

    $operationModel = new OperationModel();
    $details = $operationModel -> getDetails($_GET["nCompte"]);


} else 
    {
        header("Location:login.php");
        exit;
    }
    
require "view/compteView.php";
