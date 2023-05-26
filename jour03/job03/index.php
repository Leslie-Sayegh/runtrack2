<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$vowels = ['a', 'e', 'i', 'o', 'u']; // Liste des voyelles

for ($i = 0; $i < strlen($str); $i++) {
    $character = strtolower($str[$i]); // Convertir le caractère en minuscule pour faciliter la comparaison

    if (in_array($character, $vowels)) {
        echo $str[$i];
    }
}
?>
