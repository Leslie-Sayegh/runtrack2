


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Formulaire avec styles</title>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["style"])) {
            $selectedStyle = $_POST["style"];
            echo "<link rel='stylesheet' type='text/css' href='$selectedStyle.css'>";
        }
    }
    ?>
</head>
<body>
    <h1>Formulaire avec styles</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="style">Style :</label>
        <select name="style" id="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <br>
        <input type="submit" value="Valider">
    </form>
</body>
</html>
