<?php
try {
    $date = DateTime::createFromFormat('d/m/Y', '39/17/2019');
    echo "La date esterronée .";
} catch (Exception $e) {
    echo "La date est valide.";
}
