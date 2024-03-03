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


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Création de table</h3></div>


<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'aptest';
//TRY pour effectuer l'essai, Catch pour capturer l'erreur
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    //CREATION TABLE

    $sql="INSERT INTO `acteurs` (`ID`, `Nom`, `Prenom`, `Film`) VALUES (NULL, 'FORD', 'HARISSON', 'INDIANA JONES');";

    $conn->exec($sql);

    echo '<div class="alert alert-success" role="alert" >'.'Données ajoutées !'.'</div>';



} catch(PDOException $e) {
    
      echo '<div class="alert alert-danger" role="alert" >'.'Erreur : '.$e->getMessage().'</div>';

//    echo "La connexion à la base de données a échoué: " . $e->getMessage();

}






?>







<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>