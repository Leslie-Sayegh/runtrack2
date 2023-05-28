
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numArguments = count($_POST);
        echo "Le nombre d'arguments POST envoyé est : " . $numArguments;
    }
    ?>

    <form method="POST" action="">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
