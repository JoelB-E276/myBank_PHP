<?php 

function getCompte(PDO $db):array {      // une prepare  +  FROM compte id=: variable
        $response =  $db->query("SELECT * FROM compte");  
        $result = $response->fetchAll(PDO::FETCH_ASSOC); 
  
        return $result;                               
}     

?>



SELECT *
FROM A
INNER JOIN B ON A.key = B.key

<?php 

function getTable(PDO $db):array {      // une prepare  +  FROM compte id=: variable
        $response =  $db->query("SELECT * FROM compte");  
        $result = $response->fetchAll(PDO::FETCH_ASSOC); 
  
        return $result;                               
}     

?>
