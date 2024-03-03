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


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Les dates</h3></div>

<div class="alert alert-success mt-2" role="alert" >Les formats de date <br><br>

<a href="https://www.php.net/manual/fr/datetime.format.php">https://www.php.net/manual/fr/datetime.format.php</a>

</div>


<?php

echo '<h3> La fonction date</h3><br>';
echo date('d/m/Y'). '<br>';
echo date('l d m Y h:i:s'). '<br>';
echo date('c'). '<br>';
echo date('r'). '<br>';

echo '<h3> <br>Les dates en Local : IntlDateFormatter </h3>';

$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);

echo $formatter->format(time());

?>







<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>