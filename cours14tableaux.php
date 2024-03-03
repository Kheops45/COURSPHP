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


<div class="alert alert-warning mt-2 text-center" role="alert" ><h3>Les tableaux</h3></div>

<div class="alert alert-success mt-2" role="alert" >Avec la fonction array ou les crochets [] <br><br>
Les tableaux en PHP sont des variables spéciales qui peuvent stocker plusieurs valeurs en même temps.<br><br>
Dans un tableau, chaque valeur va être associée à une clef unique. Cette clef va nous permettre notamment de récupérer la valeur associée. 
</div>


<?php
            $prenoms = array('Mathilde', 'Pierre', 'Amandine', 'Florian');
            $ages = [27, 29, 21, 29];
    

echo '<div class="alert alert-danger" role="alert" >'.'Exemple avec le prénom en clef 1 :'.'<br><br>'.$prenoms[1] .'</div>';
echo '<div class="alert alert-danger" role="alert" >'.'Exemple avec l\'age en clef 1 :'.'<br><br>'.$ages[1] .'</div>';   



//On récupère la taille du tableau et on la stocke dans $taille
$taille = count($prenoms);

echo '<div class="alert alert-danger" role="alert" >'.'Nombre de prénoms : '.$taille .'</div>';

//On peut parcourir le tableau et afficher les valeurs une à une

echo 'Affichage des prenoms grâce à une boucle for'.'<br><br>';

for ($i = 0; $i < $taille; $i++) {
        echo $prenoms[$i].'<br>';
    }

?>







<!-- fin conteneur -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>