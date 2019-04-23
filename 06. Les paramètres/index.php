<!-- Faire une page index.php. Tester sur cette page que tous les paramètres 
de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean -->

<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe 
et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean
 -->

    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les paramètres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
        <h1>PHP - Les paramètres</h1>

        <h3>Exercice 1</h3>

            <?php
                if(isset($_GET["nom"]) && isset($_GET["prenom"])){
                    $nom = $_GET['nom'];
                    $prenom = $_GET['prenom'];
                    echo $nom . " ". $prenom;
                }
                else{
                    echo "Paramètres non définis";
                }
            ?>

        <h3>Exercice 2</h3>
        <?php
            if(isset($_GET["age"])){
                $age = $_GET["age"];
                echo $age;
            }
            else{
                echo "Aucun âge défini!";
            }
        ?>

        <h3>Exercice 3</h3>
        <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
        existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016 -->
            <?php
                if(isset($_GET["dateDebut"]) AND isset($_GET["dateFin"])){
                    $dateDebut=$_GET["dateDebut"];
                    $dateFin=$_GET["dateFin"];

                    echo "Date de début: " . $dateDebut . " " . "et date de fin " . $dateFin;
                }
                else{
                    echo "Paramètres non définis";
                }
                
            ?>

        <h3>Exercice 4</h3>
        <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
        existent et les afficher: index.php?langage=PHP&serveur=LAMP -->
                <?php
                    if(isset($_GET["langage"]) && isset($_GET["serveur"])){
                        $langage = $_GET["langage"];
                        $serveur = $_GET["serveur"];

                        echo "Langage: " . $langage . "serveur: " . $serveur;
                    }
                    else{
                        echo "Langage et serveur inexistants.";
                    }
                ?>

        <h3>Exercice 5</h3>
            <?php
                if(isset($_GET["semaine"])){
                    $semaine = $_GET["semaine"];
                    echo "Semaine: " .$semaine;
                }
                else{
                    echo "Paramètres non définis";
                }
            ?>

        <h3>Exercice 6</h3>
        <!-- index.php?batiment=12&salle=101 -->
            <?php
                if(isset($_GET["batiment"]) AND isset($_GET["salle"])){
                    $batiment = $_GET["batiment"];
                    $salle = $_GET["salle"];

                    echo "Batiment: " . $batiment . " ". "Salle: " . $salle;
                }
                else{
                    echo "Paramètres non définis";
                }
            ?>

</body>
</html>