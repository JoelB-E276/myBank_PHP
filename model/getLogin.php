<?php 

function getLogin(PDO $db, $email ):array { // nom arbitraire pour se connecter à la BDD, c'est une convetion. PDO typage du parametre de la fonction afin de ne pas avoir d'erreur silencieuse
    $query =  $db->prepare("SELECT * FROM client WHERE c_email =:email"); // :array permet de controler le type valeur de retour de la fonction
    $query->execute([
        "email" => $email
    ]);                                           // $response stock la valuer de retour du Query (requête)
     // $result = $response->fetchAll();               // fetchALL récupere toute les données renvoyées par la requete fetch sur retour qui comporte une seule ligne
     $result = $query->fetch(PDO::FETCH_ASSOC);  // + Constante de classe pour fecth all pour définir son mode de sélection   

    return $result;    
}     


?>