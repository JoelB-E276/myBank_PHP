<?php 

function getCompte(PDO $db):array { 
        $response =  $db->query("SELECT * FROM compte WHERE   "); 
        $result = $response->fetchAll(PDO::FETCH_ASSOC); 
  
        return $result;                               
}     

?>