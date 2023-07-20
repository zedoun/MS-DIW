<?php
function complex_password($motDePasse)
{
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 8) {
        return false;
    }

    // Vérifier la présence d'au moins un chiffre
    if (!preg_match('/\d/', $motDePasse)) {
        return false;
    }

    // Vérifier la présence d'au moins une majuscule et une minuscule
    if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
        return false;
    }

    // Toutes les conditions sont satisfaites
    return true;
}

// Exemple d'utilisation
$resultat = complex_password("TopSecret42");
var_dump($resultat);

?>