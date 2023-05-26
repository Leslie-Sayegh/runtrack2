<?php
// Tableau des nombres
$nombres = array(200, 204, 173, 98, 171, 404, 459);

// Fonction pour vérifier la parité d'un nombre
function verifierParite($nombre) {
    if ($nombre % 2 == 0) {
        return 'est paire';
    } else {
        return 'est impaire';
    }
}

// Affichage du tableau
echo '<table>';
echo '<tr><th>Nombre</th><th>Parité</th></tr>';

foreach ($nombres as $nombre) {
    echo '<tr>';
    echo '<td>' . $nombre . '</td>';
    echo '<td>' . verifierParite($nombre) . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
