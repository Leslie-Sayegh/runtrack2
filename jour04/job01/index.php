<?php
$argumentsCount = 0;

foreach ($_GET as $key => $value) {
    if (isset($_GET[$key])) {
        $argumentsCount++;
    }
}

echo "Le nombre d’arguments GET envoyé est : " . $argumentsCount;
?>
