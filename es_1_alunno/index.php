<?php
    header("Content-Type: application/json; charset=utf-8");
    require_once "Alunno.php";
?>
    <?php
        $alunno_1 = new Alunno("Mario", "Rossi", 16);
        $alunno_2 = new Alunno("Andrea", "Bianchi", 19);
        $alunno_3 = new Alunno("Niccolò", "Mancini", 18);

        $classe_alunni = [$alunno_1, $alunno_2, $alunno_3];

        echo json_encode($classe_alunni, JSON_UNESCAPED_UNICODE);

        /*for($i = 0; $i < count($classe_alunni); $i++) {
            echo $classe_alunni[$i]->stampa_dati();
        } */
    ?>