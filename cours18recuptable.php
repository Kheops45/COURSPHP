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



<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'aptest';



//TRY pour effectuer l'essai, Catch pour capturer l'erreur
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
} catch(PDOException $e) {
    
      echo '<div class="alert alert-danger" role="alert" >'.'Erreur : '.$e->getMessage().'</div>';


}


// Récupère les données de la table clients
$requete1 = 'SELECT * FROM acteurs';


// le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
// l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
$resultat = $conn->prepare($requete1);
$resultat->execute();

// récupe d'infos (pas utilisés ici)
$nbreResult = $resultat->rowCount(); // Nbre de ligne de résultat
//$colcount = $resultat->columnCount(); // Nombre de colonne

if (!$resultat) {
    echo 'Problème de requete';
} else {



//<!--Affichage des acteurs dans une liste à puce-->

echo '<div class="alert alert-success text-center mt-2" role="alert" >'.'Liste des acteurs'.'</div>';



while($ligne = $resultat->fetch()) {


 

  echo' <div class="card mb-2">';
  echo '<div class="card-header">';
  echo 'Acteur';
  echo'</div>';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">'.$ligne['Nom'].' '.$ligne['Prenom'].'</h5>';

  
  echo  'Film Notable : '.$ligne['Film'];
  
  echo'</div>';
  echo'</div>';
    
   // echo '<li>'.$ligne['Nom'].' ' .$ligne['Prenom'] .' Film notable : '.$ligne['Film'].'</li>';
        
	}  
      

     } // fin du else
$resultat->closeCursor(); // libère le résultat
// Un closeCursor annule l'execute() mais pas l'analyse (prepare) donc impose un nouveau execute() si une nouvelle requête est utilisée plus bas

?>






<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>