<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
echo $str . "<br />";

$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

// Parcours de la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Conversion en minuscules pour la comparaison

// Vérification si le caractère est une lettre
    if (preg_match("/[a-z]/i", $char)) {
        // Vérification si le caractère est une voyelle
        if (in_array($char, array("a", "e", "i", "o", "u", "y"))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    var_dump($dic);
}

?>

<table>
  <thead>
    <tr>
      <th style="border: 1px solid black; padding: 5px;">Voyelles</th>
      <th style="border: 1px solid black; padding: 5px;">Consonnes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="border: 1px solid black; padding: 5px;"><?php echo $dic["voyelles"]; ?></td>
      <td style="border: 1px solid black; padding: 5px;"><?php echo $dic["consonnes"]; ?></td>
    </tr>
  </tbody>
</table>