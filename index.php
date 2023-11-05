<?php

$presentTime = new DateTime('now', (new DateTimeZone('Europe/Paris')));
echo $presentTime->format("M d o A H:i ") . "\r\n";


$destinationTime = new DateTime('1980-04-01 05:25');
echo  $destinationTime->format("M d o A H:i ") . "\r\n";

$interval = $presentTime->diff($destinationTime);
echo $interval->format("la différence entre les deux années est de %y ans, %m mois, %d jours, %H heures et %I minutes."), "\n";
?>