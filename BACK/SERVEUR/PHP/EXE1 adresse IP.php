<?php

// Adresse IP du serveur
$server_ip = $_SERVER['SERVER_ADDR'];

// Adresse IP du client
$client_ip = $_SERVER['REMOTE_ADDR'];

echo "Adresse IP du serveur : " . $server_ip.
"<br>";
echo "Adresse IP du client : "  . $client_ip;
?>
