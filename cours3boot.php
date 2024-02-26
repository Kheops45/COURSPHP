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
<h1 class="text-center">Les différentes variable en PHP</h1>

</div>



  <div class="container-fluid py-3">
  

  <div class="row">
  <div class="col-md-6 bg-danger-subtle rounded-3 fs-4">
  
    Le type « chaine de caractères » ou String en anglais ;</br>
    Le type « nombre entier » ou Integer en anglais ;</br>
    Le type « nombre décimal » ou Float en anglais ;</br>
    Le type « booléen » ou Boolean en anglais ;</br>
    Le type « tableau » ou Array en anglais ;</br>
    Le type « objet » ou Object en anglais ;</br>
    Le type « NULL » qui se dit également NULL en anglais ;</br>
    Le type « ressource » ou Resource en anglais ;</br>
    La fonction gettype() nous permet de connaître le type d’une variable 


      </div>


     <div class="col-md-6 fs-4 bg-success-subtle rounded-3">

     <h1>Exemples variables</h1>
        <?php
            $nom = 'Je me nomme Arnaud';
            $age = 28;//Stocke le nombre 28 
            $age2 = '28'; //Stocke la chaine de caractères "28"
            
            echo 'La variable nom est de type : ';
            echo gettype($nom);
            echo '<br> <br>La variable "$age" contient une valeur de type ' ;
            echo gettype($age);
            echo '<br> <br> La variable "$age2" contient une valeur de type ' ;
            echo gettype($age2);

        ?>


    </div>

    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>