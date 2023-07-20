<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;

        }

        td,
        th {
            border: 8px;
            border-style: groove;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body>



    <?php
    // Tableau associatif avec les mois et le nombre de jours
    $mois = array(
        "janvier" => 31,
        "février" => 28,
        "mars" => 31,
        "avril" => 30,
        "mai" => 31,
        "juin" => 30,
        "juillet" => 31,
        "août" => 31,
        "septembre" => 30,
        "octobre" => 31,
        "novembre" => 30,
        "décembre" => 31
    );

    // Affichage du tableau des mois
    echo "<h2>Tableau des mois d'année</h2>";
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";

    foreach ($mois as $mois => $jours) {
        echo "<tr><td>$mois</td><td>$jours</td></tr>";
    }

    echo "</table>";

    // Tri du tableau en fonction du nombre de jours
    asort($mois);

    // Affichage du tableau trié
    echo "<h2>Tableau trié par nombre de jours</h2>";
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";

    foreach ($mois as $mois => $jours) {
        echo "<tr><td>$mois</td><td>$jours</td></tr>";
    }

    echo "</table>";
    ?>




</body>

</html>