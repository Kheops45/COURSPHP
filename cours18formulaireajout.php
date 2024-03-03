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


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Ajout de données</h3></div>

<!--Formulaire -->

<div class="card">

<div class="card-header text-center mb-2">
    Nouvel acteur
  </div>

<form class="row  my-2 mx-2" method="post" action="cours18ajoutform.php">
  <div class="col ">
    <div class="input-group">
      <div class="input-group-text">Nom</div>
      <input type="text" class="form-control" name="apnom" required>
    </div>
  </div>

  <div class="col">
    <div class="input-group">
      <div class="input-group-text">Prenom</div>
      <input type="text" class="form-control" name="apprenom" required>
    </div>
  </div>

  <div class="col">
    <div class="input-group">
      <div class="input-group-text">Film</div>
      <input type="text" class="form-control" name="apfilm" required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
 <button type="submit" class="mt-3 btn btn-primary">Envoyer</button>
</div>
</div>

</form>


</div>





<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>