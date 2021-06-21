<?php 

class ClientModel
{
    public PDO $db;

    public function __construct() 
    {   
        $connect = new Connexion();
        $this->db = $connect->connect();
    }

        
    public function getLogin($email)
     { 
        $response =  $this -> db ->prepare("SELECT * FROM client WHERE c_email = :email");
        $response -> execute([
            "email" => $email
            ]);                                             

         $result = $response -> fetch(PDO::FETCH_ASSOC);  
         $result = new Client($result);
   
           return $result;     
    }   
    
    
    public function getData(PDO $db, $id)
    { 
        $response =  $this -> db -> query("SELECT client.nom, client.prenom
         FROM client 
         INNER JOIN compte 
         ON client.id = compte.id_client 
         WHERE compte.id_client ='{$id}'");  //////ID à modifier XSS ///////                      
        
        $result = $response -> fetchAll(PDO::FETCH_ASSOC);
    
        return $result;                                
    
    }



}


?>