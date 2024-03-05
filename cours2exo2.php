<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "echo ne requiert pas de parenthèses.";

// Les chaînes peuvent être passées soit individuellement comme plusieurs arguments ou
// concaténées ensemble et passées en tant qu'un seul argument
echo 'Ce  ', 'texte ', 'a été fait ', 'avec plusieurs paramèrtres.', "\n";

// Aucune nouvelle ligne ou espace n'est ajoutée ; ci-dessous affiche "helloworld", tout sur une ligne
echo "hello";
echo "world";

// Pareil que ci-dessus
echo "hello", "world";



echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";



// Les expressions qui ne sont pas des chaînes sont converties en chaînes, même si declare(strict_types=1) est utilisé
echo 6 * 7; // 42




?>







</body>
</html>