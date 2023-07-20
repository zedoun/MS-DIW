<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table de multiplication</title>
    <style>
        table{border-collapse: collapse;

        }
        td,th{border: 20px;
        border-style: groove;
        padding: 25px;
text-align: center;
        }
    </style>
</head>

<body>

<?php
$departements = array(
    "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle",
                         "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

// Affichage des régions par du nom des départements
ksort($departements);
echo "<h2>Liste des régions par du nom des départements</h2>";

foreach ($departements as $region => $dept) {
    echo "<p><strong>$region</strong>: " . implode(", ", $dept) . "</p>";
}

// Affichage des régions par du nombre de départements
echo "<h2>Liste des régions par du nombre de départements</h2>";

foreach ($departements as $region => $dept) {
    $nombreDept = count($dept);
    echo "<p><strong>$region</strong>: $nombreDept départements</p>";
}
?>
</body>
</html>