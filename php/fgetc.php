<?php
$fp = fopen('somefile.txt', 'w+'); 
if (!$fp) {
    echo "Impossible d\'ouvrir le fichier somefile.txt";
}
while (false !== ($char = fgetc($fp))) { // on veut que $char soit différent de false. getc permet de lire un caractere.
    echo "$char\n";
}
?>