<?php
function somme($tab) {
    $resultat = 0;
    foreach ($tab as $valeur) {
        $resultat += $valeur;
    }
    return $resultat;
}

// Exemple d'utiliser il sera /17/
$tab = array(4, 3, 8, 2);
$resultat = somme($tab);
echo $resultat;

?>
