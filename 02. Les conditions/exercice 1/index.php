<!-- Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. 
Dans le cas contraire, afficher Vous êtes mineur. -->

<?php
$age = 12;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
    <?php

if($age >= 18){
    echo "Vous êtes majeur.";
}
else {
    echo "Vous êtes mineur";
}

    ?>
    
    </p>
</body>
</html>