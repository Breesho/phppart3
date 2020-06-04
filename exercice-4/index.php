<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
</head>
<body>

<p>Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur</p>

<?php

$varfirst = 1;

while ($varfirst <= 10) {

    echo '<br>';
    echo  $varfirst ;  
    echo '<br>';
    echo  $varfirst++ / 2;
    echo '<br>';  
}

?>


</body>
</html>
