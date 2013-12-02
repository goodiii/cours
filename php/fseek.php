
<?php

$fp = fopen('somefile.txt', 'r');

// lit quelques données
$data = fgets($fp, 4096); // fait avvancer le pointeur sur le fichier. la valeur du curseur est dans le handle. (le descripteur de fichier)

// retourne au début du fichier
// identique à rewind($fp);
fseek($fp, 0); // on modifie la valeur du curseur dans le handle. Si on refait une lecture, ce sera a partir de la position 0.

?>
