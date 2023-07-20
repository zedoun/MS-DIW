<?php
// Date à vérifier
$dateString = "32/17/2019";

try {
    // Créer une instance de DateTime en utilisant la date à vérifier
    $date = new DateTime($dateString);

    // Si nous parvenons jusqu'ici, la date est valide
    echo "La date est valide : " . $date->format('d/m/Y');
} catch (Exception $e) {
    // Si une exception est levée, cela signifie que la date est erronée
    echo "La date est erronée : " . $e->getMessage();
}
?>

