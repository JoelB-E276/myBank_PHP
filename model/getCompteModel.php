
<?php 
function getCompte(PDO $db, $id):array { 
      $response =  $db->query("SELECT compte.solde_compte, compte.numero_compte, compte.type_compte, compte.id_compte
       FROM compte 
       WHERE compte.id_client ='{$id}'");                        
      
      $result = $response->fetchAll(PDO::FETCH_ASSOC);

      return $result;                                

    }
?>
<?php /*  ////////  FAIRE UNE PREPARE ////////



function get(PDO $db, $id):array { 
      $response =  $db->query("SELECT operation.solde_compte, compte.numero_compte
       FROM operation 
       INNER JOIN compte 
       ON operation.id_compte = compte.id_compte 
       WHERE compte.id_client ='{$id}'");                        
      
      $result = $response->fetchAll(PDO::FETCH_ASSOC);

      return $result;                                

    }*/
?>

<?php 
function getOperation(PDO $db, $o):array { 
        $response =  $db->query("SELECT solde_compte, id_compte FROM operation WHERE id_compte = '{$o}'"); 
                                                         
         $result = $response->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;                                
  
      }
//SELECT * FROM operation INNER JOIN compte ON operation.id_compte = compte.id_compte WHERE operation.id_compte = 2;
    
?>

