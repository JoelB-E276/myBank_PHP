<?php 
session_start();
 if(isset($_SESSION["user"])){
    require "model/request.php";
    require "model/getLogin.php";
    require "model/getCompteModel.php";
    require "model/getDetailModel.php";
    $account = getCompte($db,$_SESSION["user"]["id"]);
    $detail = getDetail($db,$_GET["nCompte"]);

} else {
    header("Location:login.php");
    exit;
}
require "view/compteView.php";
