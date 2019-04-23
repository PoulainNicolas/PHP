<!-- Traduire ce code avec des if et des else :

<?php
  echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?>
 -->
<?php
$monAge = 39;
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<p>
<?php
    if($monAge >= 18){
        echo "Tu es majeur.";
    }
    else{
        echo "Tu n'es pas majeur.";
    }
?>

</p>
    
</body>
</html>