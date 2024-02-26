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
<h1 class="text-center">Les Opérateurs</h1>

</div>



  <div class="container-fluid py-3">
  

  <div class="row">
  <div class="col-md-6 bg-danger-subtle rounded-3 fs-4">
  
  <table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">Opérateur</th>
      <th scope="col">Opération associée</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">+</th>
      <td>Addition</td>
      
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>Soustraction</td>
     
    </tr>
    <tr>
      <th scope="row">*</th>
      <td>Multiplication</td>
    </tr>

    <tr>
      <th scope="row">/</th>
      <td>Division</td>
    </tr>

    <tr>
      <th scope="row">%</th>
      <td>Modulo (reste d’une division)</td>
    </tr>

    <tr>
      <th scope="row">**</th>
      <td>Exponentielle (élévation à la puissance d’un nombre par un autre)</td>
    </tr>


  </tbody>
</table>
  

      </div>


     <div class="col-md-6 fs-4 bg-success-subtle rounded-3">

     <h1>Exemples calculs</h1>
        <?php
 
      $x = 2 + 3 * 4; //$x stocke 14
      $y = (2 + 3) * 4; //$y stocke 20
      $z = 2 ** 3 - 4 * 4 / 8; //$z stocke 6
 
      echo '$x : 2 + 3 * 4: ' .$x. '<br>$y : (2 + 3) * 4: ' .$y. '<br>$z : 2 ** 3 - 4 * 4 / 8 : ' .$z;


      echo '<br> <br> Exemple de calcul : un guide touristique facture 200€ la journée. Il a fait 15 jours de visites dans le mois.';

      $montant = 200 * 15;

      ?>

<div class="alert alert-primary mt-2" role="alert" >
 
  <?php

    echo 'Le guide va facturer 200 * 15 soit : '.$montant .' Euros pour le mois.';
      
  ?>



</div>

      


    </div>

    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>