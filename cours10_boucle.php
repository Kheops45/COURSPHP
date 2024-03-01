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
<h1 class="text-center">Les Boucles</h1>

</div>



  <div class="container-fluid py-3">
  

  <div class="row">
  <div class="col-md-6 bg-danger-subtle rounded-3 fs-4">
  
  <table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">Boucle</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">While </th>
      <td>« tant que »</td>
      
    </tr>
    <tr>
      <th scope="row"> do… while </th>
      <td>« faire… tant que »</td>
     
    </tr>
    <tr>
      <th scope="row">for</th>
      <td>« pour »</td>
    </tr>

    <tr>
      <th scope="row">for each</th>
      <td>« pour chaque »</td>
    </tr>


    


    <table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">Opérateur Incrémentation</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">++$x </th>
      <td>Pré-incrémentation : incrémente la valeur contenue dans la variable $x, puis retourne la valeur incrémentée</td>
      
    </tr>
    <tr>
      <th scope="row"> $x++</th>
      <td>Post-incrémentation : retourne la valeur contenue dans $x avant incrémentation, puis incrémente la valeur de $x</td>
     
    </tr>
    <tr>
      <th scope="row">--$x</th>
      <td>Pré-décrémentation : décrémente la valeur contenue dans la variable $x, puis retourne la valeur décrémentée</td>
    </tr>

    <tr>
      <th scope="row">$x--</th>
      <td>Post-décrémentation : retourne la valeur contenue dans $x avant décrémentation, puis décrémente la valeur de $x</td>
    </tr>



  </tbody>
</table>
  

      </div>


     <div class="col-md-6 fs-4 bg-success-subtle rounded-3">

     <h1>Exemples Incrémentation</h1>
  <?php
 
  $x = 2; $y = 2; $a = 2; $b = 2;
 

 echo 'Valeurs de base : $x = 2; $y = 2; $a = 2; $b = 2'.'<br> <br>';
 echo 'Post incrémentation pour $x : ' .$x++. '<br>';
 echo '$x contient maintenant : ' .$x. '<br>';
 
 echo 'Pré incrémentation pour $y : ' .++$y. '<br>';
 echo '$y contient maintenant : ' .$y. '<br>';
 
 echo 'Post décrémentation pour $a : ' .$a--. '<br>';
 echo '$a contient maintenant : ' .$a. '<br>';
 
 echo 'Pré décrémentation pour $b : ' .--$b. '<br>';
 echo '$b contient maintenant : ' .$b. '<br>';

 ?>

<div class="alert alert-warning mt-3" role="alert">
Exemple Boucle : 
</div>


<?php
  $i = 0;
  echo 'Boucle while' .'<br>';
  while($i <= 5){
    $i++;
    
    echo ' nbr=' . $i;
  }

echo'<br><br>';
echo 'Boucle for' .'<br>';
for($ap=0; $ap<=9; $ap++){
 
  echo ' nbr=' . $ap ;
}

echo'<br><br>';
echo 'Boucle foreach' .'<br>';

$voitures = array("BM", "Renault", "Golf","Toyota");
   
// Parcourir le tableau cars
foreach($voitures as $voit){
  echo $voit .'<br>';
}


?>

      


    </div>

    </div>



</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>