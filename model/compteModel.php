
<?php 
function getCompte(PDO $db, $id):array { 
      $response =  $db->query("SELECT compte.solde_compte, compte.numero_compte, compte.type_compte, compte.id_compte
       FROM compte 
       WHERE compte.id_client ='{$id}'");                        
      
      $result = $response->fetchAll(PDO::FETCH_ASSOC);

      return $result;                                

   }

   function addCompte (PDO $db, $data) {
      $query = $db->prepare("SELECT");
      $query -> execute([
            ""
      ]);

   }
    
?>

