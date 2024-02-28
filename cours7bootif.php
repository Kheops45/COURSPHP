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


  <form action="cours7if_recup.php" method="post">
  
  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default" >Montant mini</span>
 <input type="text" class="form-control" placeholder="Saisir le  montant mini" name="mini">
  </div>

  </div>
		<div class="col-md-6">

  <div class="input-group mb-3">
  
  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default" >Montant maxi</span>
 <input type="text" class="form-control" placeholder="Saisir le  montant maxi" name="maxi">
  </div>
  

  </div>

		</div>
	</div>

  <button type="submit" class="btn btn-primary mb-3">Envoyer</button>

  </form>


<div class="row">

<div class="col md-6">


<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> == </span>	Permet de tester l’égalité sur les valeurs
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold">===</span> 	Permet de tester l’égalité en termes de valeurs et de types
</div>


<div class="alert alert-success" role="alert">
<span style="font-weight:bold">!= </span>	Permet de tester la différence en valeurs
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"> <> </span>	Permet également de tester la différence en valeurs
</div>



</div>

<div class="col md-6">



<div class="alert alert-success" role="alert">
<span style="font-weight:bold">!== </span>	Permet de tester la différence en valeurs ou en types
</div>


<div class="alert alert-success" role="alert">
<span style="font-weight:bold">< </span>	Permet de tester si une valeur est strictement inférieure à une autre
</div>


<div class="alert alert-success" role="alert">
<span style="font-weight:bold">> 	</span>Permet de tester si une valeur est strictement supérieure à une autre
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold"><= </span>	Permet de tester si une valeur est inférieure ou égale à une autre
</div>

<div class="alert alert-success" role="alert">
<span style="font-weight:bold">>= 	</span>Permet de tester si une valeur est supérieure ou égale à une autre
</div>


</div>




</div>
</div>



















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>