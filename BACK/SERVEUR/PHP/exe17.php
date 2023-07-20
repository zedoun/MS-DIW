
<?php
$date = new DateTime();
$date->add(new DateInterval('P1M'));
$nouvelleDate = $date->format('d/m/Y');
echo $nouvelleDate;
