
    <!-- ///////exercice 1////////
    Créer un tableau mois et l'initialiser avec les valeurs suivantes :

    janvier
    février
    mars
    avril
    mai
    juin
    juillet
    aout
    septembre
    octobre
    novembre
    décembre -->


    <?php
        $mois = array( "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
    ?>


    <!-- ///////exercice 2////////

Avec le tableau de l'exercice 1,

    afficher la valeur de la troisième ligne de ce tableau.
    afficher la valeur de l'index 5.
    modifier le mois de aout pour lui ajouter l'accent manquant. -->


    <!-- ///////exercice 3////////
    Voici la liste des départements de la région Auvergne-Rhône-Alpes : 
    Ain (01), Allier (03), Ardèche (07), Cantal (15), Drôme (26), Isère (38), Loire (42), Haute-Loire (43), 
    Puy-de-Dôme (63), Rhône (69), Savoie (73), Haute-Savoie (74)

    Créer un tableau associatif avec comme index le numéro des départements et en valeur leur nom.
    Afficher la valeur de l'index 69.
    Ajouter la ligne correspondant au département de la ville de Metz.
    Afficher toutes les valeurs ainsi que les clés associées grâce à une boucle sous la forme : 
    "Le département" + nom_departement + "a le numéro" + num_departement -->
    <?php
    $departements = array(
        "01" => "Ain",
        "03" => "Allier",
        "07" => "Ardèche",
        "15" => "Cantal",
        "26" => "Drôme",
        "38" => "Isère",
        "42" => "Loire",
        "43" => "Haute-Loire",
        "63" => "Puy-de-Dôme",
        "69" => "Rhône",
        "73" => "Savoie",
        "74" => "Haute-Savoie",

    );

    ?>


    <!-- ///////exercice 4////////
    Camille se marie et doit envoyer des mails à ses amis.

En utilisant ce tableau, faites en sorte que chaque personne de cette liste reçoit le même mail en faisant en sorte 
qu'il soit personnalisé.

array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

Mail : "Salut prénom, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter 
parmi les invités ! Gros bisous :)" -->
    <?php
        $invites = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

    ?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les tableaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>PHP - Les tableaux</h1>

    <h3>Exercice 1</h3>
        <?php
            print_r($mois);

            for ($numero = 0; $numero < 12; $numero++){
                echo "<p>$mois[$numero]</p>";
            }
        ?>

    <h3>Exercice 2</h3>
            <?php
                echo "<p>La valeur de la 3eme ligne est '$mois[2]'.</p>";
                echo "<p>La valeur de l'index 5 est '$mois[5].</p>";
                echo "<p> $mois[7] = août</p>";
                $newArray = str_replace($mois[7], "août", $mois);
                print_r($newArray);                
            ?>
    <h3>Exercice 3</h3>
        <?php
            echo 'Le département 69 est: ' .$departements["69"];
            foreach($departements as $cle => $valeurs){
                echo "<p>Le département " .$valeurs. " porte le numéro ".$cle.".</p>";
            }
        ?>

    <h3>Exercice 4</h3>

        <?php
            foreach($invites as $element){
                echo "<p>Salut $element, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter 
                parmi les invités ! Gros bisous :)</p>";
            }

        ?>

</body>
</html>