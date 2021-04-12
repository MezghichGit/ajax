

<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



/*
//Step 1 : connexion au serveur mysql local avec login=root et mdp=""
$con= mysqli_connect('localhost','root','');

//Step 2 : on choisi la base, ici c'est stock
mysqli_select_db('stock',$con);

//Step 3 : notre requette Select
$requette="SELECT * FROM produit" ;


// Step 4 : exécuter la requette et sauvegarder le résultat dans la variable $data
$data = mysqli_query($requette);

// Step 5 on calcule le nombre de ligne dans $data
$m = mysqli_num_rows($data);

//Step 6 - echo : c'est pour afficher le contenu de $m
echo $m;
*/
?>