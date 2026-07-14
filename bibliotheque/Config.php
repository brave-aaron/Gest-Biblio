<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bibliotheque";
$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
 die("Erreur de connexion : " . $conn->connect_error);
}
?>
<link rel="stylesheet" href="style.css">