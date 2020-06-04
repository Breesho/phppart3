<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 </title>
</head>
<body>

<p>Créer deux variables. Initialiser la première à 100 et 
la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable</p>

<?php

$varfirst = 100;
$varsecond = 25;

while ($varfirst >= 10) {

    echo '<br>';
    echo    $varfirst * $varsecond ;
    echo '<br>';
    echo $varfirst--;
}

?>


</body>
</html>
