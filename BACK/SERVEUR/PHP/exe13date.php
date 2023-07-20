<?php
// Dates de début et de fin de la formation
$dateDebutFormation = new DateTime('05-06-2023');
$dateFinFormation = new DateTime('28-07-2023');

// Date actuelle
$dateActuelle = new DateTime();

// Calculer la différence entre la date de fin de formation et la date actuelle
$interval = $dateActuelle->diff($dateFinFormation);

// Obtenir le nombre de jours restants avant la fin de la formation
$joursRestants = $interval->days;

// Afficher le résultat
echo "Il reste $joursRestants jours avant la fin de ma formation.";
?>
