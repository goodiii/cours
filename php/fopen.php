<html>
<head>
<h1>page.php</h1>

</head>
<body>
<?php 
$fp = fopen('date.txt','txt'); // essaie d ouvrir le fichier en ecriture. Si le fichier n es pas trouvé ou pas ouvert en ecriture, la fonction retourne false (=null)
								// Si fichier dispo, il renvoie un objet representant le fichier.
if (!($fp=fopen('date.txt','w'))) { // si fp n est pas false,..

fprintf($fp,'%04d-%02d-%02d',$year,$month,$day); // on ecrit sur $fp. $04d correspond a 4 chiffres pour le format année avec la variable $year
} 
?> 
