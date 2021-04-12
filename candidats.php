<?php
// connexion via php à mysql
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// selection de la base de données
mysqli_select_db($conn,'isika');

// récupération des produits
$candidats = $conn->query("SELECT * FROM candidat");  // query = requette

// afficher les données dans un tableau

echo"<ul>";

foreach ($candidats as $candidat) {
    
    echo"<li>"."ID : ".$candidat["id"]." Nom :".$candidat["nom"]." Email :".$candidat["email"]."</li>";
}

echo"</ul>";
?>