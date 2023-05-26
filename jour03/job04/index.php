

<?php
$str = "Dans l'espace, personne ne vous entend crier";
$length = strlen($str);

echo "La chaîne \"$str\" contient $length caractère";

if ($length > 1) {
    echo "s.";
} else {
    echo ".";
}
?>
