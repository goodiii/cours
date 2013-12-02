<?php
$handle = fopen("users.txt", "r");
while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) { // %s corespond a string, chaine de caractere. \t correspond a un espace.
    list ($name, $profession, $countrycode) = $userinfo;
    //... traitement des données
}
fclose($handle);
?>