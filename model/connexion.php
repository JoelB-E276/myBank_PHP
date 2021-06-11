
<?php
class Connexion
{
    const DB_NAME = 'banque_php';
    const USER_NAME = 'root';
    const USER_PASSWORD = '';

    public function connect()
   {
    try 
    {
      $db = new PDO('mysql:host=localhost;dbname='. self::DB_NAME .';charset=utf8', self::USER_NAME , self::USER_PASSWORD);
      /// ####   Message a retirer #### /// 
      echo "Connecté avec class Connexion. <br>"; 
      return $db;
    }
      catch(Exception $error)
       {
         echo " Non connecté à la DBB <br>";
         echo $error->getMessage();
         exit;
       }
   }
}



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
 