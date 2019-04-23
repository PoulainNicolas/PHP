
    <?php
        function vrai(){
            echo "true";
        }
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les fonctions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>PHP - Les fonctions</h1>

    <h3>Exercice 1</h3>
    <!-- Faire une fonction qui retourne true. -->
        
        <?php
            vrai();
        ?>
    <h3>Exercice 2</h3>
    <!-- Faire une fonction qui prend en paramètre 
    une chaine de caractères et qui retourne cette même chaine. -->

        <?php
            function exercice2($string){
                echo "$string";
            }
            exercice2("Ca marche.");

        ?>

    <h3>Exercice 3</h3>
    <!-- Faire une fonction qui prend en paramètre deux chaines de caractères 
    (prénom et nom de famille) et qui retourne la concaténation de ces deux chaines. -->

        <?php
            function concat ($prenom, $nomDeFamille){
                echo "Ton nom: $prenom $nomDeFamille";
            }
            concat(Nicolas, Poulain);
        ?>

    <h3>Exercice 4</h3>
    <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux
 -->
        <?php
            function comparaison($nombre1, $nombre2){
                if($nombre1 < $nombre2){
                    echo "<p>Le premier nombre est plus petit.</p>";
                }
                else if($nombre1 > $nombre2){
                    echo "<p>Le premier nombre est plus grand.</p>";
                }
                else{
                    echo "<p>Les deux nombres sont identiques.</p>";
                }
            }
            comparaison (1, 5);
            comparaison (5, 1);
            comparaison (5, 5);
        ?>

    <h3>Exercice 5</h3>
    <!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne 
    la concaténation de ces deux paramètres.
 -->
        <?php
            function concatenation ($nombre, $str){
                echo "Résultat: $nombre et $str";
            }
            concatenation(5, test);
        ?>

    <h3>Exercice 6</h3>
    <!-- Faire une fonction qui prend trois paramètres : nom, prenom et age. 
    Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->
        <?php
            function direBonjour($nom, $prenom, $age){
                echo "Bonjour $prenom $nom, tu as $age ans.";
            }
            direBonjour(Poulain, Nicolas,39);
        ?>

    <h3>Exercice 7</h3>
    <!-- Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

    Homme
    Femme

La fonction doit renvoyer en fonction des paramètres :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas. -->
        <?php
            function mineurMajeur($age, $genre){
                if($age >= 18 && $genre == "Homme"){
                    echo "<p>Vous êtes un homme et vous êtes majeur.</p>";
                }
                else if ($age < 18 && $genre =="Homme"){
                    echo "<p>Vous êtes un homme et vous êtes mineur.</p>";
                }
                else if ($age >= 18 && $genre =="Femme"){
                    echo "<p>Vous êtes une femme et vous êtes majeure.</p>";
                }
                else{
                    echo "<p>Vous êtes une femme et vous êtes mineure.</p>";
                }
            }

            mineurMajeur(56, "Homme");
            mineurMajeur(12, "Homme");
            mineurMajeur(67, "Femme");
            mineurMajeur(1, "Femme");
        ?>

    <h3>Exercice 8</h3>
    <!-- Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. 
    Tous les paramètres doivent avoir une valeur par défaut. -->
            
            <?php
            function addition($nbre1, $nbre2, $nbre3){
                echo $nbre1+$nbre2+$nbre3;
            }
            addition(1, 2, 9); 
            ?>

</body>
</html>