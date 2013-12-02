<?php

// decoupage d'une date
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d"); // on doit signaler le type de variable on recupere (chiffre,chaine,... )
echo "Le produit a été fabriqué le : $year-" . substr($month, 0, 3) . "-$day\n";
?>