

<?php
// booléenne = bool
$myBool = true;
echo  var_export($myBool, true) . "<br>";
$myBool = false;
echo  var_export($myBool, true) . "<br>";

// booléenne = bool
$str = "5" . "<br>";
echo $str;
$nombre = 5; 
if ($nombre < 6) {
    $estInferieurA6 = true;
} else {
    $estInferieurA6 = false;
}
echo "Est inférieur à 6 ? ";
if ($estInferieurA6) {
    echo "Vrai". "<br>";
} else {
    echo "Faux". "<br>";
}

// entier
$nombre = 42;
echo $nombre. "<br>";  
$nombre = 10;
echo $nombre. "<br>"; 

// chaîne de caractères
$nom = "Leslie";
$prenom = "Sayegh";
$add_mail = "-leslie.sayegh@laplateforme.io";
$info_user_Complet = $nom . " " . $prenom. " ". $add_mail. "<br>" ;
echo $info_user_Complet; 

// nombre à virgule flottante
$nombre = 3.14;
echo $nombre. "<br>"; 
$autreNombre = 75.75;
echo $autreNombre. "<br>"; 

?>




<?php
// variables
$boolVariable1 = 5 < 6;  // Résultat : true
$boolVariable2 = 7 < 6;  // Résultat : true
$entier_Variable1 = 42;
$entier_Variable2 = 10;
$stringVariable1 = 'Leslie';
$stringVariable2 = 'Sayegh';
$stringVariable3 = 'leslie.sayegh@laplateforme.io';
$floatVariable1 = 3.14;
$floatVariable2 = 75.75;

// Création d'un tableau avec les informations des variables
$tableData = [
    ['type' => 'boolean', 'nom' => 'x < 6', 'valeur' => ($boolVariable1 ? 'true' : 'false')],
    ['type' => 'boolean', 'nom' => 'x < 6', 'valeur' => ($boolVariable2 ? 'true' : 'false')],
    ['type' => 'integer', 'nom' => 'entier', 'valeur' => $entier_Variable1],
    ['type' => 'integer', 'nom' => 'entier', 'valeur' => $entier_Variable2],
    ['type' => 'string', 'nom' => 'prénom', 'valeur' => $stringVariable1],
    ['type' => 'string', 'nom' => 'nom', 'valeur' => $stringVariable2],
    ['type' => 'string', 'nom' => 'add_mail', 'valeur' => $stringVariable3],
    ['type' => 'float', 'nom' => 'décimal', 'valeur' => $floatVariable1],
    ['type' => 'float', 'nom' => 'décimal', 'valeur' => $floatVariable2]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau de variables</title>
    <style>
        table {
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .center-align {
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row): ?>
                <tr>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['valeur']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>




