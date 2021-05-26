<?php 

function getLogin(PDO $db):array { // nom arbitraire pour se connecter à la BDD, c'est une convetion. PDO typage du parametre de la fonction afin de ne pas avoir d'erreur silencieuse
    $response =  $db->query("SELECT * FROM client"); // :array permet de controler le type valeur de retour de la fonction
                                                     // $response stock la valuer de retour du Query (requête)
     // $result = $response->fetchAll();               // fetchALL récupere toute les données renvoyées par la requete
     $result = $response->fetchAll(PDO::FETCH_ASSOC);  // + Constante de classe pour fecth all pour définir son mode de sélection   

    return $result;    
}                
?>