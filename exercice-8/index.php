<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 </title>
</head>
<body>

<p>En allant de 200 à 0 avec un pas de 12, 
afficher le message Enfin !!!!.</p>

<?php


for($varfirst = 200; $varfirst >= 0; $varfirst -= 12) {
    
    echo  "<br>";  
    echo  $varfirst . " Enfin !!!!";  

}
?>


</body>
</html>