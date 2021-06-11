
<?php 

   function addCompte (PDO $db, $data) {
      $query = $db->prepare("SELECT");
      $query -> execute([
            ""
      ]);

   }
    
class AccountModel 
{
   public PDO $db;

    public function __construct() 
    { 
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php;charset=utf8','root', '');
    }

    function getAccount($id)
    { 
      $response =  $this -> db->query("SELECT compte.solde_compte, compte.numero_compte, compte.type_compte, compte.id_compte
       FROM compte 
       WHERE compte.id_client ='{$id}'");////// Faille xss //////                         
      
      $result = $response->fetchAll(PDO::FETCH_ASSOC);

      return $result;      
    }                             

   

 

}



?>

