<?php
$filename = "data.txt";
$somecontent = "....";

if (is_writable($filename)){
	if(!$handle = fopen($filename,'a')){ // la variable est declarée et affectée dans le test
	echo "impossible d'ouvrir le fichier ($filename)";
	exit;
	}
	
	if(fwrite($handle,$somecontent) === false){ //  === veut dire une egalite exacte et parfaite. false et null peuvent etre associé à 0. C pour les distinguer.
	echo "impossible d'ecrire dans le fichier ($filename)";
	exit;
	}
echo "l'ecriture de $somecontent dans le fichier $filename";
fclose($handle);
}
else {
	echo "impossible d'ecrire dans le fichier ($filename)";
}
?>