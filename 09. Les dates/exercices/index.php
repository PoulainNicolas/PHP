<?php
    $dateTime = date("d/m/Y");
    $dateTime2 = date("d-m-y");
    $dateTime3 = date("l d F Y");
    $dateTime4tsp = strtotime('2016/08/02 15:00:00');

    // nbre de jour entre today et 16 mai 2016
    // timestamp des deux dates puis différence puis conversion en jours

    $tspToday = strtotime('today');
    $tsp1605 = strtotime('2016/05/16');
    $dif = $tspToday-$tsp1605;
    $jours = $dif/86400;

    
    $date4 = date('t', mktime(0, 0, 0, 2, 1, 2017));

    $date5 = strtotime('+ 20 days');
    $date5bis = date('d/m/y', $date5);

    $date6 = strtotime('- 22 days');
    $date6bis = date('d/m/Y', $date6);
    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les dates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>PHP - Les dates</h1>

    <h3>Exercice 1</h3>
        <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 23/06/2017)</p>

            <?php
                echo $dateTime;
            ?>

    <h3>Exercice 2</h3>
        <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 23-06-17)</p>
            <?php
                echo $dateTime2;
            ?>

    <h3>Exercice 3</h3>
        <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)

Bonus : Le faire en français.</p>

            <?php
                echo $dateTime3;
            ?>

    <h3>Exercice 4</h3>
        <p>Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
            <?php
                echo "<p>Timestamp actuel: " . time() . "</p>";
                echo "<p>Timestamp du mardi 2 août 2016: " . $dateTime4tsp . "</p>";
            ?>

    <h3>Exercice 5</h3>
        <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
            <?php
                echo "<p>Timestamp today: " . $tspToday . "</p>";
                echo "<p>Timestamp 16 mai 2016: " .$tsp1605 . "</p>";
                echo "<p>Différence: " . $dif . "</p>";
                echo "<p>En jours: " . $jours . "</p>";

            ?>

    <h3>Exercice 6</h3>
        <p>Afficher le nombre de jour dans le mois de février de l'année 2017.</p>

        <?php
            echo $date4;
        ?>

    <h3>Exercice 7</h3>
        <p>Afficher la date du jour + 20 jours.</p>
            <?php
                echo "Date du jour (25 mars) + 20 jours: " . $date5bis;
            ?>

    <h3>Exercice 8</h3>
        <p>Afficher la date du jour - 22 jours</p>
            <?php
                echo "Date du jour - 22 jours: " . $date6bis;
            ?>

</body>
</html>