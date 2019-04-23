<!-- Traduire ce code avec des if et des else : -->

<!-- <?php
  echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>  -->
<?php
$maVariable = "Femme";
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
        <?php
            if($maVariable == "Homme"){
                echo "C'est un developpeur.";
            }
            else{
                echo "C'est une developpeuse.";
            }
        ?>
    
    </p>
    
</body>
</html>