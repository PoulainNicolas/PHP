<!-- Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.

Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.

Bonus : L'écrire de deux manières différentes. -->

<?php
$IsEasy = false;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
    <?php
        if($IsEasy == true){
            echo "C'est facile";
        }
        else{
            echo "C'est difficile";
        }
    ?>
    
    </p>
</body>
</html>