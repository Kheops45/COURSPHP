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
<h1 class="text-center">Concaténation</h1>

</div>



  <div class="container-fluid py-3">
  

  <div class="row">
  


     <div class="col-md-12 fs-4 bg-success-subtle rounded-3">

     <h1>Concaténation </h1>
        <?php
            $nom = 'Paradis';
            $prenom='Arnaud';
            $age = 25;
           
        echo 'Bonjour, je m\'appelle : '.$prenom .' ' .$nom .' '.'et j\'ai '.$age .' ans';
        

            
           

        ?>


    </div>

    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>