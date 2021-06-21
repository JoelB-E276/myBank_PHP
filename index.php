<?php 
 require "model/connexion.php";
 require "model/clientModel.php";
 require "model/entity/client.php";
 require "model/compteModel.php";
 require "model/entity/compte.php";

session_start();

 if(isset($_SESSION["user"]))
{   
   
    $accountModel = new AccountModel();
    $getAccount = $accountModel->getAccount($_SESSION["user"]->getId()); // session stock = a user l'objet client
   /* var_dump($getAccount = $accountModel->getAccount($client -> getId()));*/

}   else
    {
        header("Location:login.php");
        exit;
    }

 require "view/indexView.php";