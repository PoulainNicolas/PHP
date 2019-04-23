<!-- Créer deux variables age et genre. La variable genre peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre, afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas. -->
<?php
    $age = 9;
    $genre = "Femme";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
        <?php
            if($age >= 18 && $genre == "Homme"){
                echo "Vous êtes un homme et vous êtes majeur";
            }
            else if($age < 18 && $genre == "Homme"){
                echo "Vous êtes un homme et vous êtes mineur";
            }
            else if($age >= 18 && $genre = "Femme"){
                echo "Vous êtes une femme et vous êtes majeure";
            }
            else{
                echo "Vous êtes une femme et vous êtes mineure";
            }


        ?>
    
    
    </p>
</body>
</html>