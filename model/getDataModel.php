<?php 

function getData(PDO $db, $id):array { 
      $response =  $db->query("SELECT client.nom, client.prenom
       FROM client 
       INNER JOIN compte 
       ON client.id = compte.id_client 
       WHERE compte.id_client ='{$id}'");                        
      
      $result = $response->fetchAll(PDO::FETCH_ASSOC);

      return $result;                                

    }
/*function get(PDO $db, $id):array { 
        $response =  $db->query("SELECT operation.solde_compte, compte.numero_compte
         FROM operation 
         INNER JOIN compte 
         ON operation.id_compte = compte.id_compte 
         WHERE compte.id_client ='{$id}'");                        
        
        $result = $response->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;                                
    }

function insertDb(PDO $db,$id) {
  $query = $db->prepare();
        $result = $query->execute ([
            "nom" => $maison["nom"]
            
        ]);
        return $result;

        }

 /* //$typeTransaction = $_POST["type_de_transaction"];op
  $dateOperation = $_POST["date_operation"]; op
  $montant = $_POST["montant"];op
  $dateOuv = $_POST["date_ouv"];cpt
  $typeCompte = $_POST["type_compte"];cpt
  insertDb($db,$typeTransaction);  */

?>