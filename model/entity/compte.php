<?php 

class Compte
{

    public int    $id_compte;
    public int    $numero_compte;
    public string $type_compte;
    public int    $date_ouv;
    public int    $solde_compte;
    public int    $id_client;


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


    public function setId_compte(int $id_compte)
    {
        $this->id_compte = $id_compte;
    }
    public function getId_compte()
    {
        return $this->id_compte;
    }


    public function setId_client(int $id_client)
    {
        $this->id_client = $client;
    }
    public function getId_client()
    {
        return $this->id_client;
    }


    public function setNumero_compte(int $numero_compte)
    {
        $this->numero_compte = $numero_compte;
    }
    public function getNumero_compte()
    {
        return $this->numero_compte;
    }


    public function setType_compte(string $type_compte)
    {
        $this->type_compte = $type_compte;
    }
    public function getType_compte()
    {
        return $this->type_compte;
    }


    public function setDate_ouv(int $date_ouv)
    {
        $this->date_ouv = $date_ouv;
    }
    public function getDate_ouv()
    {
        return $this->date_ouv;
    }


    public function setSolde_compte(int $solde_compte)
    {
        $this->solde_compte = $solde_compte;
    }
    public function getSolde_compted()
    {
        return $this->solde_compte;
    }
}