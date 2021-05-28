<?php 
function getCompte(PDO $db, $compte):array { 
        $response =  $db->query("SELECT numero_compte, id_client, id_compte FROM compte WHERE id_client = '{$compte}'"); 
                                                         
         $result = $response->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;                                
  
      }

?>

<?php 
function getOperation(PDO $db, $operation):array { 
        $response =  $db->query("SELECT solde_compte FROM operation"); 
                                                         
         $result = $response->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;                                
  
      }

?>