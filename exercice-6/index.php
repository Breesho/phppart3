<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 </title>
</head>
<body>

<p>En allant de 20 à 0 avec un pas de 1, 
afficher le message C'est presque bon.</p>

<?php


for($varfirst = 20; $varfirst >= 0; $varfirst--) {
    
    echo  "<br>";  
    echo  $varfirst . " C'est presque bon.";  

}
?>


</body>
</html>