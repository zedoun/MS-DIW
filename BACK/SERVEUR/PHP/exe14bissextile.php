
<?php
function estBissextile($annee) {
    return ($annee % 4 == 0) ;
}

// Exemple d'utilisation

$annee = 2100;
if (estBissextile($annee)) {
    echo "$annee est une année bissextile.";
} else {
    echo "$annee n'est pas une année bissextile.";
}
