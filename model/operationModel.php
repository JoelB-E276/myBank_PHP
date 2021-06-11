<?php 
function getDetail(PDO $db, $compte ):array {
    $query =  $db->prepare("SELECT id_numero_operation, type_de_transaction, montant, date_operation, id_compte 
    FROM operation
    WHERE operation.id_compte =:compte"); 
    $query->execute([
        "compte" => $compte
    ]);                                        
     $result = $query->fetchAll(PDO::FETCH_ASSOC);  

    return $result;  
}

function getOperation(PDO $db, $o):array { 
    $response =  $db->query("SELECT solde_compte, id_compte FROM operation WHERE id_compte = '{$o}'"); 
                                                     
     $result = $response->fetchAll(PDO::FETCH_ASSOC);

    return $result;                                

  }

  ///////////// OBJ ////////////////////

  class OperationModel
  {
    public PDO $db;

    public function __construct() 
    { 
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php;charset=utf8','root', '');
    }

    public function getDetails(PDO $db, $compte ):array {
        $query =  $this -> db->prepare("SELECT id_numero_operation, type_de_transaction, montant, date_operation, id_compte 
        FROM operation
        WHERE operation.id_compte =:compte"); 
        $query->execute([
            "compte" => $compte
        ]);                                        
         $result = $query->fetchAll(PDO::FETCH_ASSOC);  
         $result = new Operation($result);

    
        return $result;  

    }
  }
?>