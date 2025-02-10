<?php
    require_once "Persona.php";
    require_once "Studente.php";
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
        $persona_1 = new Persona("Alberto", "Verdi");
        $studente_1 = new Studente("Mattia", "Negri", "ABC123");

        echo $persona_1->presentati() . "<br>";
        echo $studente_1->presentati();
    ?>
</body>
</html>