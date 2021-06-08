
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
 