
<?php 

   
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
       WHERE compte.id_client ='{$id}'");////// sql //////                         
      
      $result = $response->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $key => $data){
         $result[$key] = new Compte($data);
     }

      return $result;      
    }                             

    function addAccount(Compte $addAccount)
    {
      $query = $this -> db -> prepare('INSERT INTO compte (solde_compte, type_compte, date_ouv, numero_compte, id_client) VALUES (:solde_compte, :type_compte, now(), :numero_compte, :id_client)');
      $result = $query -> execute ([
            "solde_compte"  => $addAccount -> getSolde_compte(),
            "type_compte" => $addAccount -> getType_compte(),
            "numero_compte" => $addAccount-> getNumero_compte(),
            "id_client"=>$addAccount->getId_client()


      ]);
      return;

   }

 

}


/*('INSERT INTO compte (type_compte,id_compte,solde_compte,date_ouv) VALUES (:type_compte,DEFAULT,:montant,now())');*/
?>

