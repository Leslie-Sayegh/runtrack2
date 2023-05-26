<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
echo $str . "<br />";

// Obtenir la longueur de la chaîne
$length = strlen($str);

// Récupérer le premier caractère 
//penser que ça commence par 0 pas 1 donc la dernière est -1
$firstChar = $str[0];

// Parcourir les caractères de 1 à la longueur - 1
for ($i = 1; $i < $length - 1; $i++) {
    // Remplacer le premier caractère par le suivant
    $str[$i - 1] = $str[$i];
}

// Remplacer le dernier caractère par le premier
$str[$length - 2] = $firstChar;

echo $str;
?>
