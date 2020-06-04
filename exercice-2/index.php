<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 </title>
</head>
<body>

<p>Créer deux variables. Initialiser la première à 0 et 
la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable</p>

<?php

$varfirst = 0;
$varsecond = 25;

while ($varfirst < 20) {
    echo '<br>';
    echo    $varfirst * $varsecond ;
    echo '<br>';
    echo $varfirst++;
}

?>


</body>
</html>
