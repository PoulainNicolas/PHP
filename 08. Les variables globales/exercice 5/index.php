<?php
    // création des variables login et mdp
    $cLogin = "Login";
    $cMdp = "Password";
    // création de deux cookies pour récupérer login et mdp

    setcookie($cLogin, $_POST["login"], time() + 30);
    setcookie($cLogin, $_POST["newLogin"], time() + 30);

    setcookie($cMdp, $_POST["mdp"], time() + 30);
    setcookie($cMdp, $_POST["newMdp"], time() + 30);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
    <?php
            
            $displayForm = true;
            if(isset($_POST["submit"])){
                
                $displayForm = false;
                echo "<p>Nom du cookie 1: " . $cLogin . " Valeur cookie 1: " . $_POST["login"] . "</p>";
                echo "<p>Nom du cookie 2: " . $cMdp . " Valeur cookie 2: " . $_POST["mdp"] . "</p>";

            }

            if($displayForm){
            ?>
            <form action="index.php" method="POST" name="display">
            <div>
                <label for="login">Login </label>
                <input type="text" name="login">
            </div>
            <div>
                <label for="mdp">Mot de passe </label>
                <input type="password" name="mdp">
            </div>
            <input type="submit" name="submit" value="Dééééééroule">
        </form>
        <?php
            }
        ?>

</body>
</html>