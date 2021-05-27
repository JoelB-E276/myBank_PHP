
<?php

$dbName = 'banque_php';
$userName = 'root';
$userPassword = '';

 try {
    $db = new PDO('mysql:host=localhost;dbname='.$dbName.';charset=utf8', $userName,$userPassword );
     
 }
 catch(Exception $error) {
   echo " Non connecté à la DBB";
    echo $error->getMessage();
    exit;
 }


?>
 