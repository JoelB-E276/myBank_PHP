<?php 
session_start();
 if(isset($_SESSION["user"])){
    require "model/connexion.php";
    require "model/compteModel.php";
    $account = getCompte($db,$_SESSION["user"]["id"]);
   
 } else{
  header("Location:login.php");
  exit;
 }

if(!empty($_POST)){
  if(isset($_POST ["montant"]) && isset($_POST ["date_ouv"]) && isset($_POST ["type_compte"])){
      formatDatas($datas);
      addCompte($db,$_SESSION["user"]["id"]);

   }
}
  function formatDatas($datas){
    $datas = trim($datas);
    $datas = stripslashes($datas);
    $datas = htmlspecialchars($datas);
    return $datas;
}

require "view/addCompteView.php";

  ?>
