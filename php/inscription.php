<?php
include "connect.php";
class Inscrit{
public $nom;
public $pre;
public $dat;
public $nat;
public $gen;
public $niv;
public $bio;
public $email;
public $pwd;
public $cin;



function insertion(){
$base= Connexion::getConnexion();
    $req="INSERT INTO inscription (nom, prenom,dat,nationalite, niveau, genre,bio,email, pwd, cin) VALUES ('".$this->nom."', '".$this->pre."','".$this->dat."','".$this->nat."','".$this->gen."','".$this->niv."','".$this->bio."','".$this->email."','".$this->pwd."', '".$this->cin."')";
    $nbLine= $base->exec($req);
    if($nbLine==1){
        echo "insertion avec succses";
    }
    else{
     echo "insertion  echouer";
    }
}
}
?>