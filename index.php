<?php 
require "model/connexion.php";
require "model/clientModel.php";
require "model/entity/client.php";
$connect = new Connexion();
$connect->connect();
session_start();




 /*if(isset($_SESSION["user"])){
    require "model/connexion.php";
    require "model/compteModel.php";
    $account = getCompte($db,$_SESSION["user"]["id"]);
    
} else {
    header("Location:login.php");
    exit;
}
 require "view/indexView.php";*/