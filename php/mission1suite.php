<?php

extract($_POST);
$moyenne = $points/$nombres;

$fichier = fopen('moyenne.txt','a');
fprintf($fichier,"%s; %d; %d; %d; \r\n", $nom, $points, $nombres, $moyenne);


// recupere les donnes du form
// ouvre un fichier en ecriture et ecrit une ligne du type: 'Dupont ;7.24;\n' et ferme le fichier
// renvoi les données enregistrées sur une page coté client du type: Bonjour Dupont, ta moyenne est de 7.24
// on utilise ces donnes pour les afficher dans une page html
fclose($fichier);
header("location: mission1.php");
?>