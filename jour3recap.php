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
  <h3>Envie de Voyage ? Contactez Nous !</h3>
</div>

<!-- Début ligne -->
<div class="row">

<!-- Debut colonne 4 -->
<div class="col-md-4">


<img src="http://paradisinfos.com/imgap/travel.jpg" class="img-thumbnail" alt="...">


<!-- fin colonne 4 -->
</div>


<!-- Début colonne de 8 -->
<div class="col-md-8">

<form action="recupj3.php" method="post">

<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control text-center" placeholder="Prenom" name="apprenom">
  </div>
  <div class="col">
    <input type="text" class="form-control text-center" placeholder="Nom" name="apnom">
  </div>
</div>

<div class="progress my-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-success" style="width: 100%"></div>
</div>

<div class="row g-3">
<div class="col">

<select class="form-select text-center" aria-label="Default select example" name="apville">
  <option selected>Sélectionnez la ville a visiter : </option>
  <option value="Assouan">Assouan</option>
  <option value="Le Caire">Le Caire</option>
  <option value="Alexandrie">Alexandrie</option>
  <option value="Louxor">Louxor</option>
</select>



</div>
  <div class="col">
  <select class="form-select text-center" aria-label="Default select example" name="apnombre">
  <option selected>Nombre de personnes : </option>
  <option value="1">1 Personne</option>
  <option value="2">2 Personnes</option>
  <option value="3">3 Personnes</option>
  <option value="4">4 Personne</option>
</select>  
</div>
</div>


<div class="input-group mb-3 mt-2">
  <span class="input-group-text" id="basic-addon1">Montant du pourboire à donner au guide :</span>
  <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="apmontant" required>
</div>


<div class="progress my-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-success" style="width: 100%"></div>
</div>




<button type="submit" class="btn btn-primary btn-lg">C'est parti pour le voyage !!</button>



</div>





<!-- fin colonne de 8 -->

















</form>
<!-- fin ligne -->
</div>

<!-- Fin Container -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>