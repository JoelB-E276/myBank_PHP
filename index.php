<?php 

session_start();

 if(isset($_SESSION["user"]))
{   
    require "model/connexion.php";
    require "model/clientModel.php";
    require "model/entity/client.php";
    require "model/compteModel.php";
    require "model/entity/compte.php";

    $accountModel = new AccountModel();
    $client = new Client($_SESSION["user"]);
    $client -> getId($_SESSION["user"]);
    $getAccount = $accountModel -> getAccount($client -> getId());
   /* var_dump($getAccount = $accountModel->getAccount($client -> getId()));*/

}   else
    {
        header("Location:login.php");
        exit;
    }

 require "view/indexView.php";