
<html>
<head>
<h1>page.php</h1>

</head>
<body>
<?php 
$num = 5;
$location = "bananier";
$quoi = "singes";
$format = "il y a %d %s dans le %s";

echo sprintf($format,$num,$quoi,$location);	// on applique le $format aux 2 autres chaines qui suivent. Ceux sont des arguments ici.
?> 

<br/>

<?php 									// autre ecriture	
echo sprintf("il y a %d %s dans le %s",5,"singes","bananier");	// echo = afficher.
?>
</br>
<?php
$format = "il y a %e %s dans le %s";	 	// autre ecriture
echo sprintf($format,$num,$quoi,$location);
?> <br/>	
</body>
</html>