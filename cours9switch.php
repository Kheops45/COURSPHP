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
<h1 class="text-center">Switch Case</h1>
</div>


<div class="row">

	<div class="col-md-12">

<h5 class="text-center"> Sélectionnez un acteur de film : </h5>


<form method="POST" action="">
<select class="form-select" name="acteur" aria-label="Default select example">

  <option selected>Acteur Choisi : </option>
  <option value="1">Harrisson Ford </option>
  <option value="2">Henry Cavil</option>
  <option value="3">Mark Hamil</option>
  <option value="4">Sean Connery</option>
  <option value="5">Ryan Reynolds</option>
  <option value="6">Hugh Jackman</option>

</select>


<button type="submit" class="btn btn-primary my-3">Valider</button>

</form>


</div>


</div>


<div class="row">

<div class="col-md-12">

<?php

//isset — Détermine si une variable est définie et est différente de NULL

if (isset($_POST['acteur'])) {
	
$film="";

//debut test
switch ($_POST['acteur']) {

  case 1: $film='Film notable : Indiana Jones';
  break;
  case 2: $film='Film notable : Superman';
  break;

  case 3: $film='Film notable : Stars Wars';
  break;

  case 4: $film='Film notable : James Bond';
  break;

  case 5: $film='Film notable : Deadpool';
  break;

  case 6: $film='Film notable : Wolverine';
  break;


//fin test
}


echo '<div class="alert alert-primary" role="alert">';
echo $film;
echo '</div>';


}


?>

</div>


</div>




</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>