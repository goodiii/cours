<?php // ne marche pas

$fichier = fopen('moyenne.txt','r');
while ($info = fscanf($fichier, "%s ;%s ;%s ;%s")) { 
    list ($nom, $points, $nombres, $moyenne) = $info;
	}
	echo "$nom, $points, $nombres, $moyenne";

?>