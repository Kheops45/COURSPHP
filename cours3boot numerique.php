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
<h1 class="text-center">Les variabes numériques</h1>

</div>



  <div class="container-fluid py-3">
  

  <div class="row">
  <div class="col-md-6 bg-danger-subtle rounded-3 fs-4">
  
En PHP, on va pouvoir stocker deux types différents de donnée numéraires dans nos variables : </br>
Le type Integer, qui contient tous les nombres entiers positifs ou négatifs </br>
Le type Float ou Double, qui contient les nombres décimaux (nombres à virgule) positifs ou négatifs.</br></br>

On va donc pouvoir stocker un entier ou un nombre décimal dans une variable. </br>
Pour cela, il suffit d’affecter le nombre à stocker à notre variable, sans guillemet ni apostrophe.</br></br>

Attention : il faudra préciser des points à la place de nos virgules pour les nombres relatifs.  
  

      </div>


     <div class="col-md-6 fs-4 bg-success-subtle rounded-3">

     <h1>Exemples variables</h1>
        <?php
 
          $ville="Orleans";
          $cp=45000;
          $moyenne=12.50;

            
            echo 'Ma ville : ';
            echo $ville;
            echo '<br> <br> Le code postal est : ';
            echo $cp;
            echo '<br><br> Ma moyenne actuelle : ' ;
            echo $moyenne;

            echo '<br> <br> La variable ville est de type : ';
            echo gettype($ville);
            echo '<br> <br>La variable "$cp" contient une valeur de type ' ;
            echo gettype($cp);
            echo '<br> <br> La variable "$moyenne" contient une valeur de type ' ;
            echo gettype($moyenne);

        ?>


    </div>

    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>