<!-- C'est les soldes. Un t-shirt qui te plaît coûte 785€ à la base 
mais ce mois-ci, ton magasin préféré lui applique une ristourne de 30%. 
Grâce à tes nouvelles connaissances en PHP, affiche le prix de départ, 
le montant de la ristourne et le prix que tu vas payer sur ton navigateur. -->

<?php
$prixDeBase= 785;
$pourcentage= 0.3;
$ristourne= $prixDeBase * $pourcentage;
$prixSolde = $prixDeBase - $ristourne;

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>exercice 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <p>
    <?php
    echo "Le t-shirt coûte  $prixDeBase. Le montant de la ristourne de 30% est égal à $ristourne.
    Je paierai donc le t-shirt $prixSolde."
    ?>
    
    </p>
</body>
</html>