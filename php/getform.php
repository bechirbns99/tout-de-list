<?php
include "inscription.php";

 $nom = $_POST['nom'] ;
 $pre =$_POST['pre'];
 $cin =$_POST['cin'];
 $date =$_POST['date'];
 $nat =$_POST['nat'];
 $gen =$_POST['s']; 
 $niv =$_POST['niv']; 
 $bio =$_POST['text'];
 $email =$_POST['e'];
 $pwd =$_POST['pwd'];

$ins= new Inscrit();
$ins-> nom = $nom;
$ins-> pre = $pre;
$ins-> cin = $cin;
$ins-> dat = $date;
$ins-> nat = $nat;
$ins-> gen = $gen;
$ins-> niv = $niv;
$ins-> bio = $bio;
$ins-> email = $email;
$ins-> pwd = $pwd;
$ins-> insertion();
header('location: http://localhost/bootcamp%20web/tout-de-list/html/connection.html')
?>