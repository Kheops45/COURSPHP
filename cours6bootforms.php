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
<h1 class="text-center">Formulaire</h1>

</div>


	<div class="row">
		<div class="col-md-6">


  <form action="cours6recup_form.php" method="post">
  
  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default" >Nom</span>
 <input type="text" class="form-control" placeholder="Votre nom" name="nom">
  </div>

  </div>
		<div class="col-md-6">

  <div class="input-group mb-3">
  
  <span class="input-group-text ">Campus</span>
  <select class="form-select" name="campus">
  <!---  Texte pour choisir l'option--->
  <option selected>Sélectionnez votre campus</option>
  <option value="Orleans">Orleans</option>
  <option value="Bruxelles">Brxuelles</option>
  <option value="Valenciennes">Valenciennes</option>

</select>

  </div>

		</div>
	</div>

  <button type="submit" class="btn btn-primary">Envoyer</button>

  </form>
</div>



















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>