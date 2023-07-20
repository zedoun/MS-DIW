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
        td,th{border: 10px;
        border-style:ridge;
        padding: 20px;
text-align: center;
        }
    </style>
</head>

<body>

<?php

$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);

// Affichage des capitales par ordre alphabétique suivies du nom du pays
ksort($capitales);
echo "<h2>Liste des capitales par ordre alphabétique</h2>";
echo "<table>";
echo "<tr><th>Capitale</th><th>Pays</th></tr>";

foreach ($capitales as $capitale => $pays) {
    echo "<tr><td>$capitale</td><td>$pays</td></tr>";
}

echo "</table>";

// Affichage des pays par ordre alphabétique suivis du nom de la capitale
asort($capitales);
echo "<h2>Liste des pays par ordre alphabétique</h2>";
echo "<table>";
echo "<tr><th>Pays</th><th>Capitale</th></tr>";

foreach ($capitales as $capitale => $pays) {
    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
}

echo "</table>";

// Affichage du nombre de pays dans le tableau
$nombrePays = count($capitales);
echo "<h2>Nombre de pays : $nombrePays</h2>";

// Suppression des capitales ne commençant pas par la lettre 'B'
foreach ($capitales as $capitale => $pays) {
    if (substr($capitale, 0, 1) !== 'B') {
        unset($capitales[$capitale]);
    }
}

// Affichage du contenu du tableau après suppression
echo "<h2>Tableau après suppression des capitales ne commençant pas par 'B'</h2>";
echo "<table>";
echo "<tr><th>Capitale</th><th>Pays</th></tr>";

foreach ($capitales as $capitale => $pays) {
    echo "<tr><td>$capitale</td><td>$pays</td></tr>";
}

echo "</table>";
?>