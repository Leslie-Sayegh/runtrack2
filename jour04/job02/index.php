<!DOCTYPE html>
<html>
<head>
    <title>Tableau HTML</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Arguments</th>
            <th>Valeurs associées</th>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php echo $_GET['prenom']; ?></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $_GET['nom']; ?></td>
        </tr>
    </table>

    <form action="" method="GET">
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
