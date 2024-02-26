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
<h1 class="text-center">Les Opérateurs d’affectation et opérateurs combinés</h1>

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
      <th scope="row">.=</th>
      <td>Concatène puis affecte le résultat</td>
      
    </tr>
    <tr>
      <th scope="row">+=</th>
      <td>Additionne puis affecte le résultat</td>
     
    </tr>
    <tr>
      <th scope="row">-=</th>
      <td>Soustrait puis affecte le résultat</td>
    </tr>

    <tr>
      <th scope="row">*=</th>
      <td>DiviMultiplie puis affecte le résultatsion</td>
    </tr>

    <tr>
      <th scope="row">/=</th>
      <td>Divise puis affecte le résultat</td>
    </tr>

    <tr>
      <th scope="row">%=</th>
      <td>Calcule le modulo puis affecte le résultat</td>
    </tr>

    <tr>
      <th scope="row">**=</th>
      <td>Élève à la puissance puis affecte le résultat</td>
    </tr>

  </tbody>
</table>
  

      </div>


     <div class="col-md-6 fs-4 bg-success-subtle rounded-3">

     <h1>Exemples affectation</h1>
      <?php
 
          $a = "Bonjour";
          $a .= " le monde"; //$a stocke "Bonjour le monde"
          echo '$a stocke : ' .$a. '<br>';
 
          $x = 5;
          $x -= 3; //$x stocke désormais 2
          echo '$x stocke : ' .$x. '<br>';
 
          $y = 3;
          $y **= $x; //$y stocke 3^2 = 3 * 3 = 9
          echo '$y stocke : ' .$y;

      ?>





</div>

      


    </div>

    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>