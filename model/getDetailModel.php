<?php 
function getDetail(PDO $db, $compte ):array {
    $query =  $db->prepare("SELECT id_numero_operation, type_de_transaction, montant, date_operation, id_compte FROM operation WHERE operation.id_compte =:compte"); 
    $query->execute([
        "compte" => $compte
    ]);                                        
     $result = $query->fetchAll(PDO::FETCH_ASSOC);  

    return $result;  
}
?>