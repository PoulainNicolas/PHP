<?php

// je démarre la session AVANT HTML
session_start();

// je crée mes trois variables
$_SESSION["nom"] = "Ducon";
$_SESSION["prenom"] = "Jean-Marie";
$_SESSION["age"] = 39;


?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice 2 - Superglobales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<p>
<?php
    echo "<p>Salut " . $_SESSION["prenom"] . "</p>";
    echo "<p>Visite une autre page!";
?>
</p>
<p>
    <a href="maDeuxiemePage.php">Lien vers ma deuxième page</a>
</p>
    
</body>
</html>