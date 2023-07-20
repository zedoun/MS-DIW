
<?php
$date = new DateTime('@1000200000');
$dateLisible = $date->format('d/m/Y H:i:s');
echo $dateLisible;
