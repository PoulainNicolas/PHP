<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
        <?php
            echo "Heyyy. Re-bonjour " .$_SESSION["prenom"] . " " . $_SESSION["nom"] . " " . "qui a " . $_SESSION["age"] ." ". "ans.</p>"
        ?>
    </p>
</body>
</html>