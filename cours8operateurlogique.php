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
<h1 class="text-center">Opérateur logique</h1>
</div>


<div class="row">

	<div class="col-md-6">

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> AND </span>	Renvoie true si toutes les comparaisons valent true
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> && </span>	Renvoie true si toutes les comparaisons valent true
</div>


<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> OR </span>	Renvoie true si une des comparaisons vaut true
</div>



</div>

<div class="col-md-6">

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> || </span>	Renvoie true si une des comparaisons vaut true
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> XOR </span>	Renvoie true si une des comparaisons exactement vaut true
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> ! </span>	 	Renvoie true si la comparaison vaut false (et inversement)
</div>




</div>




<form action="cours8ope_recup.php" method="post">
  
  
<div class="row">
  <div class="col md-6">
  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default" >Votre nom : </span>
 <input type="text" class="form-control" placeholder="Saisir votre nom" name="apnom">
  </div>
  

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="aptest" id="inlineRadio1" value="Masculin">
  <label class="form-check-label" for="inlineRadio1">Masculin</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="aptest" id="inlineRadio2" value="Féminin">
  <label class="form-check-label" for="inlineRadio2">Féminin</label>
</div>


 
  </div>
 

  <div class="col md-6">

  <div class="input-group mb-3"> 
  <span class="input-group-text" id="inputGroup-sizing-default" >Votre ville : </span>

  <select class="form-select" aria-label="Default select example" name="apville">
  <option selected>Selectionnez votre ville</option>
  <option value="Orleans">Orleans</option>
  <option value="Paris">Paris</option>
  <option value="Toulouse">Toulouse</option>
</select>  
</div>
</div>

<div class="row">

<div class="col-md-6">

<button type="submit" class="btn btn-primary mb-3">Envoyer</button>


</div>

</div>

</form>


</div>



<div class="row mt-2">

<div class="col-md-12">


<div class="alert alert-warning " role="alert">
TEST RECUP <br><br>
Si la la ville est Orléans ou Paris : Afficher "Bienvenue au Nord de la France"<br>
Sinon, afficher  : "Bienvenue dans le Sud !!"

</div>




</div>








</div>

</div>











</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>