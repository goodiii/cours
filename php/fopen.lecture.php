<?php // ouverture d un fichier en lecture

$handle = fopen("C:\wamp\www\dir\php\date.txt","r"); // place le curseur de lecture en debut de fichier
$handle = fopen("C:\wamp\www\dir\php\date.gif","wb"); // créer le fichier, mm gif s il n existe pas
$handle = fopen("http:\www.example.com","w"); // on cible une page web
$handle = fopen("ftp:\\user:pass@example.com\date.txt","w"); // on cible un ftp qui s ouvre avec log et pass.
// r+ correspond a lecture et ecriture avec curseur en debut de fichier
// w correspond a ecriture avec curseur en debut de fichier
// w+ correspond a lecture et ecriture avec taille du fichier a 0
// a correspond ecriture en fin de fichier
// a+ correspond a lecture et ecriture en fin de fichier
// wb write binary

?>