 
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>

<form action="index.php" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Valider">
</form>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>

<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
} else {
    echo "Veuillez entrer un nombre.";
}
?>

</body>
</html>
