<?php // Correction, Technique 1
$fichier = file('moyenne.txt'); // avec ligne, on recupere ligne par ligne.

foreach ($fichier as $ligne) { 
	$mots = explode(";",$ligne);
	echo "$mots[0] a eu une moyenne de $mots[3]  <br />";
}
?>
	