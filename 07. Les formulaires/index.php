<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les formulaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>PHP - Les formulaires</h1>

    <h3>Exercice 1</h3>
        <form action="user.php" method="GET">
            <div>
            <label for="nom">Votre nom:</label>
            <input type="text" name="nom">
            </div>
            <p><label for="">Votre prénom: </label><input type="text" name="prenom"></label></p>
            <input type="submit" value="Valider">
        </form>


    <h3>Exercice 2</h3>
        <form action="user.php" method="POST">
            <div>
            <label for="nom">Votre nom:</label>
            <input type="text" name="nom">
            </div>
            <p><label for="">Votre prénom: </label><input type="text" name="prenom"></label></p>
            <input type="submit" value="Valider">
        </form>

    <h3>Exercice 3</h3>

    <h3>Exercice 4</h3>

    <h3>Exercice 5</h3>
        
        <form action="index.php" method="POST">
            <select name="civilite">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <div>
                <label for="nom">Votre nom: </label>
                <input type="text" name="nom">
            </div>
            <div>
                <label for="prenom">Votre prénom: </label>
                <input type="text" name="prenom">
            </div>
            <input type="submit" value="Dééééééroule">
        </form>
        <?php
            echo "<p> Bienvenue " . $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . "</p>";

        ?>

    <h3>Exercice 6</h3>
    
        <?php
            $displayForm = true;
            if(isset($_POST["submit"])){
                $displayForm = false;
                echo "<p> Bienvenue " . $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . "</p>";
            }

            if($displayForm){
            ?>
            <form action="index.php" method="POST" name="display">
            <select name="civilite">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <div>
                <label for="nom">Votre nom: </label>
                <input type="text" name="nom">
            </div>
            <div>
                <label for="prenom">Votre prénom: </label>
                <input type="text" name="prenom">
            </div>
            <input type="submit" name="submit" value="Dééééééroule">
        </form>
        <?php
            }
        ?>

    <h3>Exercice 7</h3>
    <?php
            $displayForm = true;
            if(isset($_POST["submit"])){
                $displayForm = false;
                echo "<p> Bienvenue " . $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . "</p>";
                // La fonctionpathinforenvoie un array contenant entre autres l'extension du fichier
                $infosfichier = pathinfo($_FILES['monFichier']['name']);
                // je tape ça dans une var
                $extension_upload = $infosfichier['extension']; 
                // echo $infosfichier;
                echo "L'extension du fichier: " .$infosfichier['extension'];
            }

            if($displayForm){
            ?>
            <form action="index.php" method="POST" name="display" enctype="multipart/form-data">
            <select name="civilite">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <div>
                <label for="nom">Votre nom: </label>
                <input type="text" name="nom">
            </div>
            <div>
                <label for="prenom">Votre prénom: </label>
                <input type="text" name="prenom">
            </div>
            <div>
                <label for="monFichier">Ton fichier:</label>
                <input type="file" name="monFichier">
            </div>
            <input type="submit" name="submit" value="Dééééééroule">
        </form>
        <?php
            }
        ?>

    <h3>Exercice 8</h3>
    <!-- Sur le formulaire de l'exercice 6, en plus de ce qui est demandé
     sur les exercices précédents, vérifier que le fichier transmis est bien un fichier pdf. -->
     <?php
            $displayForm = true;
            if(isset($_POST["submit"])){
                $displayForm = false;
                echo "<p> Bienvenue " . $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . "</p>";
                // La fonctionpathinforenvoie un array contenant entre autres l'extension du fichier
                $infosfichier = pathinfo($_FILES['monFichier']['name']);
                // je tape ça dans une var
                $extension_upload = $infosfichier['extension']; 
                // echo $infosfichier;
                echo "<p>L'extension du fichier: " .$infosfichier['extension']."</p>";
            }
            // creation d'un array contenant les extensions autorisees
            $extensionsAutorisees = array("pdf", "gif");
            // comparaison de l'extension du fichier upload et des extensions autorisées
            if(in_array($extension_upload, $extensionsAutorisees)){
                // autoriser upload définitivement le fichier
                move_uploaded_file($_FILES['monFichier']['tmp_name'], 'uploads/' . basename($_FILES['monFichier']['name']));

                        echo "<p>L'envoi a bien été effectué !</p>";
            }
            else{
                // attention si fichier pas bon faut laiser les formulaires!!!
                $displayForm = true;
                echo "<p>Veuillez charger un fichier PDF ou GIF!</p>";
            }

            if($displayForm){
            ?>
            <form action="index.php" method="POST" name="display" enctype="multipart/form-data">
            <select name="civilite">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <div>
                <label for="nom">Votre nom: </label>
                <input type="text" name="nom">
            </div>
            <div>
                <label for="prenom">Votre prénom: </label>
                <input type="text" name="prenom">
            </div>
            <div>
                <label for="monFichier">Ton fichier:</label>
                <input type="file" name="monFichier">
            </div>
            <input type="submit" name="submit" value="Dééééééroule">
        </form>
        <?php
            }
        ?>

</body>
</html>