<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

    <h3>Exercice 1</h3>
        <?php
            echo "<p> Bonjour " .htmlspecialchars($_GET["prenom"]). " " . htmlspecialchars($_GET["nom"]) . "</p>";
        ?>

    <h3>Exercice 2</h3>
        <?php
            echo "<p> Bonjour " .htmlspecialchars($_POST["prenom"]). " " . htmlspecialchars($_POST["nom"]) . "</p>";
        ?>


    <h3>Exercice 3</h3>
    <p>idem exercice 1</p>

    <h3>Exercice 4</h3>
    <p>voir exercice 2</p>

    <h3>Exercice 5</h3>

    <h3>Exercice 6</h3>

    <h3>Exercice 7</h3>

    <h3>Exercice 8</h3>
</body>
</html>