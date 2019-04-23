<!-- Traduire ce code avec des if et des else :

<?php
  echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?>
 -->
 <?php
 $maVariable = false;
 ?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
        <?php
            if ($maVariable == false){
                echo "C'est pas bon.";
            }
            else{
                echo "C'est OK.";
            }
        ?>
    
    </p>
</body>
</html>