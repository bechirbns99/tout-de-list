<?php
include "inscription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toutdeliste";

$nom = $_POST['nom'] ;
 $pre =$_POST['pre'];
 $cin =$_POST['cin'];
 $date =$_POST['date'];
 $nat =$_POST['nat'];
 foreach($_POST['s'] as $valeur){ 
    $gen=$valeur; 
 }
 foreach($_POST['niv'] as $valeur){ 
  $niv=$valeur; 
}
 $bio =$_POST['text'];
 $email =$_POST['e'];
 $pwd =$_POST['pss'];

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

 $sql="insert into inscription VALUES ('$nom', '$pre', '$cin','$date','$nat','$gen','$niv','$bio','$email','$pwd')";
echo "votre données envoyer";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>