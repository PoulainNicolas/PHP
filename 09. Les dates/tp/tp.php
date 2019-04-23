<?php
    // variable mois
    $month=$_POST['Mois'];

    // variable années
    $year=$_POST['annee'];
    switch($month){
        case 1: $Mois="janvier"; break;
        case 2: $Mois="février"; break;
        case 3: $Mois="mars"; break;
        case 4: $Mois="avril"; break;
        case 5: $Mois="mai"; break;
        case 6: $Mois="juin"; break;
        case 7: $Mois="juillet"; break;
        case 8: $Mois="août"; break;
        case 9: $Mois="septembre"; break;
        case 10: $Mois="octobre"; break;
        case 11: $Mois="novembre"; break;
        case 12: $Mois="Décembre"; break;
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TP - Les dates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Les dates TP</h1>
        <p>Faire un formulaire avec deux listes déroulantes. 
        La première sert à choisir le mois, et le deuxième permet d'avoir l'année. 
        En fonction des choix, afficher un calendrier comme celui-ci :</p>

        <?php
    // liste mois
    echo '<form action="tp.php" method="post">
            <select name="Mois">
               <option value="1">janvier</option>
               <option value="2">février</option>
               <option value="3">mars</option>
               <option value="4">avril</option>
               <option value="5">mai</option>
               <option value="6">juin</option>
               <option value="7">juillet</option>
               <option value="8">août</option>
               <option value="9">septembre</option>
               <option value="10">octobre</option>
               <option value="11">novembre</option>
               <option value="12">décembre</option>
            </select>

            <select name="annee">';
            for ($annee = 1970; $annee <= 2030; $annee++){
               if ($annee == 2019){
                    echo '<option value="'.$annee.'" selected>'.$annee.'</option>';
               } else 
               echo '<option value="'.$annee.'">'.$annee.'</option>';
            }
      echo '</select>
            <input type="submit" value="Valider">
        </form>';
        if (isset($month)){
            $nbjour = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            $jour1 = date("N",mktime(0, 0, 0, $month, 1, $year));
            echo "<table>
                    <tr>
                        <td colspan='7'>".$Mois." ".$year."</td>
                    </tr>
                    <tr>
                        <th>Lundi</th> <th>Mardi</th> <th>Mercredi</th> <th>Jeudi</th> <th>Vendredi</th> <th>Samedi</th> <th>Dimanche</th>
                    </tr>
                    <tr>";
              $j = 1;
              $d = 1;
              for ($i = 1; $i <= $nbjour + $jour1 -1 ; $i++){
                if ((($i-1) % 7 == 0)&&($i-1 != 0)){
                    echo "</tr><tr>";
                }
                if ($i < $jour1){
                    echo "<td></td>";
                    $d++;
                } else {
                    echo "<td>".$j++."</td>";
                }
              }
              //for ($i = $j ; $i < (44-$d) ; $i++){
              //  echo "<td></td>";
              //}
              echo "</tr>
                  </table>";
        }
?>

        
</body>
</html>