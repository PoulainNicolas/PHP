<!-- code php -->
<?php
$nom="Poulain";
$prenom="Nicolas";
$age=39;
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p><?php 
    echo "Bonjour $prenom, enfant de la famille $nom et ayant atteint le level $age!"
    ?></p>
    
</body>
</html>