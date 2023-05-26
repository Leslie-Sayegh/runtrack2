<?php
//  if (isset($_GET["nom"]) && isset($_GET["prenom"])){
//   echo $_GET["nom"] ." " .$_GET["prenom"];

//  }
//  if (isset($_POST["nom"]) && isset($_POST["prenom"])){
//   echo "<h1> Bienvenue " . $_POST["nom"] ." " .$_POST["prenom"] . "! </h1>";

//  }

if (!empty($_GET)){
  foreach($_GET as $name => $value){
    echo $name . " " . $value;
  }
  var_dump(($_GET));
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="test.php" method="get">
    <input type="text"  name="nom"  placeholder="nom">
    <input type="text"  name="prenom"  placeholder="prenom">
     <input type="submit" value="envoyez">
  </form>
</body>
</html>








































<!-- <?php
if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
    $prenom = $_GET["prenom"];
    $nom = $_GET["nom"];
    echo "<h1>" . $nom . "  " . $prenom . " !</h1>";
}

if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    echo "<h1>" . $nom . "  " . $prenom . " !</h1>";
}


if (!empty($_GET)) {
  foreach ($_GET as $name => $value) {
    echo ucfirst($name) . ": " . $value . "<br>";
  }
} else {
  echo "Aucune donnée GET n'a été soumise.";
}
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <form action="test.php" method="post">
        <input type="text" placeholder="nom" name="nom">
        <input type="text" placeholder="prenom" name="prenom">
        <input type="submit" value="envoyez">
    </form>
</body>

</html>

 -->
