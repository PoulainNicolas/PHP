<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les boucles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>PHP - Les boucles</h1>
    <h3>Exercice 1</h3>

    <!-- Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer
 -->
    <?php
        $maVariable = 0;
        while($maVariable <= 10){
            echo $maVariable;
            $maVariable ++;
        }
    ?>

    <h3>Exercice 2</h3>

    <!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un 
    nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    incrementer la première variable
 -->

        <?php
            $variable1 = 0;
            $variable2 = 34;
            while($variable1 <= 20){
                $multiplication = $variable1*$variable2;
                echo "<div> $multiplication </div>";
                $variable1 ++;
            }

        ?>

    <h3>Exercice 3</h3>

    <!-- Créer deux variables. Initialiser la première à 100 et 
    la deuxième avec un nombre compris en 1 et 100. 
    Tant que la première variable n'est pas inférieure ou égale à 10 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variable
 -->
        <?php
            $variable1 = 100;
            $variable2 = 10;
            while($variable1 >10){
                $multiplication = $variable1*$variable2;
                echo "<div> $multiplication </div>";
                $variable1 --;
            }
        ?>
    <h3>Exercice 4</h3>

    <!-- Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10,
     il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur
 -->
        <?php
            $variable = 1;
            while($variable <= 10){
                echo "<div> $variable </div>";
                $variable+=$variable/2;
            }
        ?>

    <h3>Exercice 5</h3>
    <!-- En allant de 1 à 15 avec un pas de 1, 
    afficher le message On y arrive presque. Combien de fois le message s'affiche-il ? -->

        <?php
                for($a = 1; $a <=15; $a++){
                echo "<p>On y arrive presque</p>";
            }
            $a--;
            echo "Le message s'affiche $a fois";

        ?>

    <h3>Exercice 6</h3>
    <!-- En allant de 20 à 0 avec un pas de 1, 
    afficher le message C'est presque bon. Combien de fois le message s'affiche-il ? -->

        <?php
            for ($a = 20; $a >=0; $a--){
                echo "<p>C'est presque bon.</p>";
                $variable0++;
            }
            $variable0--;
            echo "Le message s'affiche $variable0 fois";
        ?>

    <h3>Exercice 7</h3>

<!-- En allant de 1 à 100 avec un pas de 15, afficher le message 
On tient le bon bout. Combien de fois le message s'affiche-il ? -->

        <?php
            for($var = 1; $var <= 100; $var+=15){
                echo "<p>On tient le bon bout</p>";
                $var1++;
            }
            $var1--;
            echo "Le message s'affiche $var1 fois";
        ?>

    <h3>Exercice 8</h3>
<!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. 
Combien de fois le message s'affiche-il ? -->

        <?php
            for($var2 = 200; $var2 >=0; $var2-=12){
                echo "<p>Enfin!!!</p>";
                $var3++;
            }
            echo "Le message s'affiche $var3 fois.";

        ?>

</body>
</html>