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
    


<div class="alert alert-success mx-auto" role="alert">
<h1 class="text-center">Récupération des données du Formulaire</h1>

</div>



  <div class="container-fluid py-3">
  

  <div class="row">
  <div class="col-md-12">
  

  <div class="progress mb-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >
  <div class="progress-bar progress-bar-striped bg-success" style="width: 100%"></div>
</div>



  <?php


echo 'Valeur Mini : ' .$_POST['mini'].'<br>';
echo 'Valeur Maxi : ' .$_POST['maxi'].'<br>';
?>

<div class="progress my-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-success" style="width: 100%"></div>
</div>
<?php
if($_POST['mini'] > 1000){
  echo 'La valeur mini contient une valeur supérieure à 1000';
}

if($_POST['mini'] == $_POST['maxi']){
  echo 'mini et maxi contiennent la même valeur';
}


?>


  <div class="progress my-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >
  <div class="progress-bar progress-bar-striped bg-success" style="width: 100%"></div>
</div>

<h3> IF ELSE </h3>
  <?php

if($_POST['mini'] > 1000){
  echo 'Mini contient une valeur strictement supérieure à 1000 <br> <br>';
}else{
  echo 'Mini contient une valeur inférieure ou égale à 1000 <br> <br>';
}

if($_POST['mini'] == $_POST['maxi']){
  echo 'Mini et maxi contiennent la même valeur <br> <br>';
}else{
  echo 'Mini et Maxi contiennent des valeurs différentes <br> <br>';
}


?>
      


<div class="progress my-3" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >
  <div class="progress-bar progress-bar-striped bg-warning" style="width: 100%"></div>
</div>

<h3> On peut également utiliser la syntaxe if…elseif…else  </h3>

</div>

  </div>

  </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>