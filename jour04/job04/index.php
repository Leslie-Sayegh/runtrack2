<!DOCTYPE html>
<html>
<head>
    <title>Affichage des données POST</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
   
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier si des données ont été envoyées via POST
        if (!empty($_POST)) {
            echo '<table>';
            echo '<tr><th>Argument</th><th>Valeur</th></tr>';
            
            foreach ($_POST as $argument => $valeur) {
                echo '<tr><td>' . htmlspecialchars($argument) . '</td><td>' . htmlspecialchars($valeur) . '</td></tr>';
            }
            
            echo '</table>';
        } else {
            echo '<p>Aucune donnée POST envoyée.</p>';
        }
    }
    ?>
    <h2>Formulaire POST</h2>
    <form method="POST" action="">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
