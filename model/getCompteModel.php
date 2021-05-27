<?php 

function getCompte(PDO $db):array {      // une prepare  +  FROM compte id=: variable
        $response =  $db->query("SELECT * FROM compte");  
        $result = $response->fetchAll(PDO::FETCH_ASSOC); 
  
        return $result;                               
}     

?>