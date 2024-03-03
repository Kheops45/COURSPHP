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


<div class="alert alert-success mt-2" role="alert" >
Liste complète des fonctions : <a href="https://www.php.net/manual/fr/funcref.php">https://www.php.net/manual/fr/funcref.php</a>

</div>

<div class="alert alert-success mt-2" role="alert" >
Exemple avec Fonction print_r

</div>

<?php

$arnaud="1234";
print_r ($arnaud);

?>


<div class="alert alert-success mt-2" role="alert" >
Exemple avec Fonction var_dump

</div>

<?php

$arnaud=12547.36;
var_dump ($arnaud);


?>

<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>