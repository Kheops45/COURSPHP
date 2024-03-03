<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Connexion à une BDD - PDO</h3></div>



<?php

$servername = 'localhost';
$username = 'root';
$password = '';
//TRY pour effectuer l'essai, Catch pour capturer l'erreur
try {
   
    //connexion au serveur
    $conn = new PDO("mysql:host=$servername", $username, $password);

    //requête           
    $sql = "CREATE DATABASE aptest";
    //sur la connexion, on execute la requete
    $conn->exec($sql);
    
   
} catch(PDOException $e) {
    echo "La connexion à la base de données a échoué: " . $e->getMessage();
}



?>







<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>