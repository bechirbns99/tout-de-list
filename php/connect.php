<?php
class Connexion {

    public static function getConnexion(){
       try{
        $base = new PDO("mysql:host=localhost;dbname=toutdeliste","root",""); 

        return $base;
        
       } catch (PDOException $e) {
die("erreur : ".$e->getMessage());

       }
        
    }
}

?>