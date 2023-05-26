<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
echo $str . "<br />";

$reversedStr = '';
$length = strlen($str); // Utilisation de mb_strlen pour prendre en compte les caractères spéciaux

for ($i = $length - 1; $i >= 0; $i--) {
    if ($str[$i] === ' ') {
        // Ajouter l'espace 
        $reversedStr .= ' ';
    } else {
        // Ajouter le caractère en échappant les caractères spéciaux
        $reversedStr .= htmlspecialchars($str[$i]);
    }
}
echo $reversedStr;

    var_dump($str);
    var_dump($reversedStr);
    var_dump($length);
   
?>













