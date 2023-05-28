<!DOCTYPE html>
<html>
<head>
    <title>Affichage d'une maison</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur" required><br>

        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur" required><br>

        <input type="submit" value="Afficher la maison">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = $_POST["largeur"];
        $hauteur = $_POST["hauteur"];

        // Validation des valeurs saisies
        if (!is_numeric($largeur) || !is_numeric($hauteur)) {
            echo "Veuillez entrer des valeurs numériques pour la largeur et la hauteur.";
        } else {
            // Affichage du triangle équilatéral
            for ($i = $hauteur - 1; $i >= 0; $i--) {
                for ($j = 0; $j < $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for ($j = 0; $j < ($hauteur - $i) * 2 - 1; $j++) {
                    echo "- ";
                }
                echo "<br>";
            }

            // Affichage du rectangle
            for ($i = 0; $i < $hauteur; $i++) {
                for ($j = 0; $j < $largeur; $j++) {
                    if ($j == 0 || $j == $largeur - 1) {
                        echo "| ";
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>
