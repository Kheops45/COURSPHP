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


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Les tableaux associatifs (utilisation de =>)</h3></div>

<div class="alert alert-success mt-2" role="alert" >Avec la fonction array ou les crochets [] <br><br>
Un tableau associatif est un tableau qui va utiliser des clefs textuelles qu’on va associer à chaque valeur.<br><br>
Imaginons par exemple qu’on souhaite stocker les âges de nos différents utilisateurs dans un tableau.<br>
Ici, plutôt que d’utiliser un tableau numéroté dans lequel il serait difficile de dire à qui appartient chaque âge, <br>
il serait judicieux d’utiliser un tableau associatif en utilisant par exemple les pseudonymes de nos membres comme clefs. 
</div>


<?php

$ages = ['Mylène' => 27, 'Arnaud' => 29, 'Jasmine' => 21];

echo '<div class="alert alert-danger" role="alert" >'.'Mylène a : '.$ages['Mylène'].' ans' .'</div>';

echo 'Utilisation de foreach pour récupérer les infos : <br><br>';

foreach($ages as $nom => $chiffre){
    echo $nom. ' a ' .$chiffre. ' ans<br><br>';
}

?>







<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>