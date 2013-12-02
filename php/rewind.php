<?php
$file = fopen("data.txt","r+");
rewind($file);
fwrite($file,'Foo'); // le module php demande au Disk Operating System d ecrire 3 octets dans le fichier bat.txt
					//Le dos Peut decider de garder les 3 octets en attendant d en avoir plus
fflush($file); // demande une ecriture effective du DOS pour vider le buffer en ecriture.
ftruncate($file,ftell($file)); // Supprime les lignes apres la position indique par ftell($file). ftell($file) renvoie la position actuelle du curseur 

?>