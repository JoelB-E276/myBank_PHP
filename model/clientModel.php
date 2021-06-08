<?php 

function getLogin($email ):array { // nom arbitraire pour se connecter à la BDD, c'est une convetion. PDO typage du parametre de la fonction afin de ne pas avoir d'erreur silencieuse
    $query =  $db->prepare("SELECT * FROM client WHERE c_email =:email"); // :array permet de controler le type valeur de retour de la fonction
    $query->execute([
        "email" => $email
    ]);                                           // $response stock la valuer de retour du Query (requête)
     // $result = $response->fetchAll();               // fetchALL récupere toute les données renvoyées par la requete fetch sur retour qui comporte une seule ligne
     $result = $query->fetch(PDO::FETCH_ASSOC);  // + Constante de classe pour fecth all pour définir son mode de sélection   

    return $result;    
}   


function getData(PDO $db, $id):array { 
    $response =  $db->query("SELECT client.nom, client.prenom
     FROM client 
     INNER JOIN compte 
     ON client.id = compte.id_client 
     WHERE compte.id_client ='{$id}'");                        
    
    $result = $response->fetchAll(PDO::FETCH_ASSOC);

    return $result;                                

  }

class ClientModel 
{
    public PDO $db;

    public int    $id;
    public string $nom;
    public string $prenom;
    public string $c_email;
    public string $c_password;

    function __construct() {
        $this->setDb();
      }
    
      public function setDb() {
        $this->db = $db;
      }
    
      public function getDb() {
        return $this->db;
      }
    
    public function getLogin($email)
     { 
        $response =  $this->getDb()->prepare("SELECT * FROM client WHERE c_email =:email"); 
        $query = $response->execute([
            "email" => $email
        ]);                                           
         $result = $response->fetch(PDO::FETCH_ASSOC);  
    
        return $result;    
    }   
    
    
    public function getData(PDO $db, $id):array { 
        $response =  $db->query("SELECT client.nom, client.prenom
         FROM client 
         INNER JOIN compte 
         ON client.id = compte.id_client 
         WHERE compte.id_client ='{$id}'");  //////ID à modifier XSS ///////                      
        
        $result = $response->fetchAll(PDO::FETCH_ASSOC);
    
        return $result;                                
    
      }



}


?>