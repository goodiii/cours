<?php
$fichier = fopen('fichier.txt','r');
$ligne = fgets($fichier); // lit une ligne dans le fichier. Dans le cas présent 'abc'
$ligne2 = fgets($fichier);
$ligne3 = fgets($fichier);

echo "$ligne $ligne2 $ligne3";
?>