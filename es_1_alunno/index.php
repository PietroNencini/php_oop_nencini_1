<?php
    require_once "Alunno.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>

    <h1> Stampa dei dati degli alunni </h1>

    <?php
        $alunno_1 = new Alunno("Mario", "Rossi", 16);
        $alunno_2 = new Alunno("Andrea", "Bianchi", 19);
        $alunno_3 = new Alunno("Niccolò", "Mancini", 18);

        $classe_alunni = [$alunno_1, $alunno_2, $alunno_3];

        for($i = 0; $i < count($classe_alunni); $i++) {
            echo $classe_alunni[$i]->stampa_dati();
        }
    ?>
</body>
</html>