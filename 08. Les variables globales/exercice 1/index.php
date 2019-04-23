<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les variables globales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
  <h1>PHP - Les variables globales</h1>

  <h3>Exercice 1</h3>
  <!-- Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur
 -->
 <!-- $_SERVER['REMOTE_ADDR'] donne l'adresse ip -->
<!-- get_browser donne l'user agent -->
<!-- SERVER_NAME' nom du serveur -->
<!-- Sous Apache 2, vous devez définir UseCanonicalName = On et ServerName. 
Sinon, cette valeur reflète le nom d'hôte fourni par le client, qui peut être falsifié. 
Il n'est pas sûr de s'appuyer sur cette valeur dans les contextes dépendant de la sécurité.  -->
    <?php
        $_SERVER['REMOTE_ADDR'];
        echo "<p> L'adresse IP: " .$_SERVER['REMOTE_ADDR']. "</p>";

        echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

        $browser = get_browser(null, true);
        print_r($browser);

        echo "<p> Server name: " . $_SERVER['SERVER_NAME'] . "</p>";
    ?>
  <h3>Exercice 2</h3>
  <!-- session_start()  : démarre le système de sessions. -->
  <!-- !!!!!!!!!!!!!!!!!!!!il faut appeler  session_start()  sur chacune de vos pages 
  AVANT d'écrire le moindre code HTML (avant même la balise  <!DOCTYPE> -->
  <!-- session_destroy()  : ferme la session du visiteur -->

  <h3>Exercice 3</h3>  

  <h3>Exercice 4</h3>  

  <h3>Exercice 5</h3>  

</body>
</html>