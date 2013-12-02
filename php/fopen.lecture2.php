<?php // ouverture d un fichier en Byte.

$filename = "data.txt"; //  ne marche pas
$handle = fopen("$filename","w");
$contents = 123;
	while(!feof($handle)){ // feof = file end of file . permet de savoir si on arrive a la fin du fichier. Tant qu on est pas la fin du fichier, on repet.
		$contents .= fread($handle,8192); // .= contenation en PHP. A chak lecture, on prend 8 kilo(8192).	}
	}
	fclose($handle);

// un acces web par 8kilo c un peu bof. Pr lecture sur le disk c mieux.
// toujours finir par un fclose() pour valider l ecriture.
?>