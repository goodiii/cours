<?php
// Lit une page web dans un tableau.
$lines = file('http://fr.php.net/manual/fr/function.fgetc.php'); // lit tout le fichier, le decompose en lignes placées dans un tableau

// Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne
foreach ($lines as $line_num => $line) { // $lines correspond au tableau contenant toutes les lignes de la page web. $line correspond a la clé
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n"; // line_num correspond a la clé de chaque ligne du tableau.
}

// Un autre exemple, pour obtenir une page web dans une chaîne. Voir aussi la fonction file_get_contents().
$html = implode('', file('http://www.example.com/'));

// Utilisation de drapeau, depuis PHP 5
$trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>