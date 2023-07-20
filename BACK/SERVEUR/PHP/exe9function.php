<?php 


function genererLien($lien, $titre) {

    $resultat = '<a href="' . $lien . '">' . $titre . '</a>';
    return $resultat;
}

// Exemple d'utiliser
$lienGenerer = genererLien("https://www.reddit.com/", " mon site  Reddit Hug");
echo $lienGenerer;
?>

