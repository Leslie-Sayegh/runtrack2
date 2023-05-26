
<?php
// compter afficher le nombre d'argument en appuyant sur 'ENTRER' 

// Vérifie si un formulaire a été soumis via la méthode GET
if (isset($_GET['submit'])) {
    // Compte le nombre d'arguments dans $_GET
    $count = 0;
    foreach ($_GET as $key => $value) {
        // Ignore le champ submit
        if ($key !== 'submit') {
            $count++;
        }
    }

    // Affiche le nombre d'arguments
    echo "Le nombre d'arguments GET envoyé est : " . $count;

}// mise en forme tableau et entrer pour calculer 
?>

<form method="GET">
    <input type="text" name="arg1" placeholder="Argument 1"><br>
    <input type="text" name="arg2" placeholder="Argument 2"><br>
    <input type="text" name="arg3" placeholder="Argument 3"><br>
	<input type="submit" name="submit" value="Envoyer">
</form>

