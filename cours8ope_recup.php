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
<h1 class="text-center">Récupération des données du Formulaire</h1>

</div>




<div class="card mb-3" style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="tech.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Infos Récupérées</h5>
        <p class="card-text">

        <?php

        if ($_POST ['apville']=="Orleans" OR $_POST ['apville']=="Paris")  {

        echo 'Bienvenue '.$_POST['apnom'].' au nord de la France'.'<br>';

        }

        else  {
        echo 'Bienvenue '.$_POST['apnom'].' dans le Sud !!'.'<br>';

        }




echo '<br>'.'Vous etes de sexe : '.$_POST['aptest'].'<br>';
echo 'Vous habitez à : ' .$_POST['apville'].'<br>';

?>




        </p>
      </div>
    </div>
  </div>
</div>










    
    
    
    
  </div>

 

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>