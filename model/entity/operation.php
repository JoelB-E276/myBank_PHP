<?php 

class Operation
{

    public int    $id_numero_operation;
    public int    $id_compte;
    public int    $montant;
    public int    $date_operation;
    public string $type_de_transaction;



    public function __construct($data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }


    public function setId_numero_operation(int $id_numero_operation)
    {
        $this->id_numero_operation = $id_numero_operation;
    }
    public function getId_numero_operation()
    {
        return $this->id_numero_operation;
    }


    public function setId_compte(int $id_compte)
    {
        $this->id_compte = $id_compte;
    }
    public function getId_compte()
    {
        return $this->id_compte;
    }


    public function Montant(int $montant)
    {
        $this->montant = $montant;
    }
    public function getMontant()
    {
        return $this->montant;
    }


    public function setDate_operation(int $date_operation)
    {
        $this->date_operation = $date_operation;
    }
    public function getDate_operation()
    {
        return $this->date_operation;
    }


    public function setType_de_transaction(string $type_de_transaction)
    {
        $this->type_de_transaction = $type_de_transaction;
    }
    public function getType_de_transaction()
    {
        return $this->type_de_transaction;
    }

}