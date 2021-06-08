
<?php
/*$dbName = 'banque_php';
$userName = 'root';
$userPassword = '';

 try {
    $db = new PDO('mysql:host=localhost;dbname='.$dbName.';charset=utf8', $userName,$userPassword );
     
   }
 catch(Exception $error) {
   echo " Non connecté à la DBB";
    echo $error->getMessage();
    exit;
 }*/



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
      echo "Connecté à la BDD";
      return $db;
    }
      catch(Exception $error)
       {
         echo " Non connecté à la DBB";
         echo $error->getMessage();
         exit;
       }
  
 
   }
}









?>
 