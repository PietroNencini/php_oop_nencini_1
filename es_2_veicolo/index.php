<?php
    require_once "Automobile.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>

    <h1> Stampa dei dati delle automobili </h1>

    <?php
        $automobile_1 = new Automobile("Peugeot", 2006, "206+");
        echo $automobile_1->get_anno()."<br>";
        echo $automobile_1->get_marca()."<br>";
        echo $automobile_1->get_modello()."<br>";
    ?>
</body>
</html>