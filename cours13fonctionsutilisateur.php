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


<div class="alert alert-warning mt-2" role="alert" >
Fonctions Utilisateurs</a>

</div>

<div class="alert alert-success mt-2" role="alert" >
Fonction simple  : Affiche Bonjour + le prénom

</div>

<?php

function bonjour ($nom) {

    echo 'Salut ' .$nom;
}


bonjour('Arnaud');


?>


<div class="alert alert-success mt-2" role="alert" >
Fonctions avec paramètres

</div>

<?php
include 'fonctions.php';


 calculersomme(50,20);


?>

<div class="alert alert-success mt-2" role="alert" >
Fonction calcul TTC (TVA 20%)

</div>


<form method="get" action="">
<div class="input-group mb-3">
<span class="input-group-text" >Montant HT</span>
<input type="text" class="form-control" name="mht" required>
<button type="submit" class="btn btn-primary">Calculer</button>
</div>


</form>

<?php

function mttc($ttc){

    $total= $ttc*1.20;
    echo '<div class="alert alert-danger mt-2" role="alert" >'.$total .' Euros'.'</div>';

}


if (isset($_GET['mht'])) {
    mttc($_GET['mht']);
}

else {

    echo '<div class="alert alert-danger mt-2" role="alert" >'.'Pas de calcul à faire'.'</div>';

}

?>





<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>