<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 </title>
</head>
<body>

<p>En allant de 1 à 100 avec un pas de 15, 
afficher le message On tient le bon bout.</p>

<?php


for($varfirst = 1; $varfirst <= 100; $varfirst+=15) {
    
    echo  "<br>";  
    echo  $varfirst . " C'est presque bon.";  

}
?>


</body>
</html>