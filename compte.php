<?php 
session_start();
 if(isset($_SESSION["user"])){
    require "model/connexion.php";
    require "model/operationModel.php";
    require "model/entity/operation.php";

    $operationModel = new OperationModel();
    $operation = new Operation();
    $details = $operationModel -> getDetails($db,$_GET["nCompte"]);

} else {
    header("Location:login.php");
    exit;
}
require "view/compteView.php";
