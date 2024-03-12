<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="container-fluid mt-2"> 
<!-- Début Container -->

<div class="alert alert-success text-center" role="alert">
  <h3>Récapitulatif de vos informations</h3>
</div>

<!-- Début ligne -->
<div class="row">

<div class="col-md-12">

<div class="card mx-auto">
  <div class="card-header bg-warning text-center">
   <h3> Informations Voyage</h3>
  </div>
  <div class="card-body">
    
<!-- Récup info Formulaire -->

<?php

$message=$_POST['apnom'].' '.$_POST['apprenom'];

echo 'Vous êtes : '.'<b>'.$message.'</b>'.'<br><br>';
echo 'Vous vous rendez à : '.'<b>' .$_POST['apville'].'</b>'.'<br><br>';

echo 'Votre groupe est composé de : '.'<b>'.$_POST['apnombre'] .' gentils visiteurs'.'</b>'.'<br><br>';

echo 'Vous avez prévu de donner au guide : '.'<b>'.$_POST['apmontant'].'</b>';


?>




  </div>
</div>




</div>



<!-- Fin Container -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>