<?php
    require_once "Animale.php";
    require_once "Cane.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>

    <h1> Stampa dei versi degli animali </h1>

    <?php
        $animale_generico = new Animale();
        $cane_1 = new Cane();

        $animale_generico->verso();
        $cane_1->verso();
    ?>
</body>
</html>