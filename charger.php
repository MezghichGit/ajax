<?php

// connexion à la base de données

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



// Partie : Récupération des candidats
$candidats = $conn->query("SELECT * FROM candidat");  // query = requette

// afficher les données dans un tableau

echo"<border=1 align=center class=table  table-striped id=tabC>";
echo"<tr><th>Nom</th><th>Email</th><th>Tel</th></tr>";

foreach ($candidats as $candidat) {
    
    echo"<tr><td>".$candidat["nom"]."</td><td>".$candidat["email"]."</td><td>".$candidat["tel"]."</td></tr>";
}

echo"</table>";
?>