<?php 

class Client
{

    public int    $id;
    public string $nom;
    public string $prenom;
    public string $c_email;
    public string $c_password;

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


    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }


    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }


    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setC_email(string $c_email)
    {
        $this->c_email = $c_email;
    }
    public function getC_email()
    {
        return $this->c_email;
    }


    public function setC_password(string $c_password)
    {
        $this->c_password = $c_password;
    }
    public function getC_password()
    {
        return $this->c_password;
    }
}