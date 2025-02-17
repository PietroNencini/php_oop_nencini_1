<?php
    include "config.php";
    header("Content-Type: application/json; charset=utf-8");
    //require_once "Voto.php";
    //require_once "Alunno.php";
    //require_once "Indirizzo.php";
    $autoload = function ($classname) use($subdir) {
        foreach($subdir as $dir) {<?php
            include "config.php";
            header("Content-Type: application/json; charset=utf-8");
            //require_once "Voto.php";
            //require_once "Alunno.php";
            //require_once "Indirizzo.php";
            $autoload = function ($classname) use($subdir) {
                foreach($subdir as $dir) {
                    $file = __DIR__ ."/includes/$classname.php";
                    if(file_exists($file)) {
                        require_once $file; 
                        break;
                    }
                }
                
            };
        
            spl_autoload_register($autoload);
        
        
            //* Serializzazione JSON
        
            //$alunno_1 = new Alunno("Mario", "Rossi", 16);
            //$alunno_2 = new Alunno("Andrea", "Bianchi", 19);
            //$alunno_3 = new Alunno("Niccolò", "Mancini", 18);
            //$classe_alunni = [$alunno_1, $alunno_2, $alunno_3];
            //$json = json_encode($classe_alunni, JSON_UNESCAPED_UNICODE);
        
        
            //* Deserializzazione JSON
        
            $json = file_get_contents("alunni.json");
        
        
            $alunni2 = json_decode($json, true);
            
            
            $classe_alunni = [];
        
            foreach ($alunni2 as $al) {
                $alunno = new Alunno($al["nome"], $al["cognome"], $al["eta"], null);
                $classe_alunni[] = $alunno;
            }
        
            $voto1 = new Voto(10, "Matematica", "Integrali Definiti sono chiari");
        
            $classe_alunni[1]->addVoto($voto1);
            $classe_alunni[2]->setIndirizzo(new Indirizzo("Viale IV Novembre", "40", "50032", "FI"));
            //! Riserializzazione JSON (boh ci andava di farlo)
        
            echo json_encode($classe_alunni);
        
        
        
            //TODO file_put_contents("alunni.json", $json);
        
            $file = __DIR__ ."/includes/$classname.php";
            if(file_exists($file)) {
                require_once $file; 
                break;
            }
        }
        
    };

    spl_autoload_register($autoload);


    //* Serializzazione JSON

    //$alunno_1 = new Alunno("Mario", "Rossi", 16);
    //$alunno_2 = new Alunno("Andrea", "Bianchi", 19);
    //$alunno_3 = new Alunno("Niccolò", "Mancini", 18);
    //$classe_alunni = [$alunno_1, $alunno_2, $alunno_3];
    //$json = json_encode($classe_alunni, JSON_UNESCAPED_UNICODE);


    //* Deserializzazione JSON

    $json = file_get_contents("alunni.json");


    $alunni2 = json_decode($json, true);
    
    
    $classe_alunni = [];

    foreach ($alunni2 as $al) {
        $alunno = new Alunno($al["nome"], $al["cognome"], $al["eta"], null);
        $classe_alunni[] = $alunno;
    }

    $voto1 = new Voto(10, "Matematica", "Integrali Definiti sono chiari");

    $classe_alunni[1]->addVoto($voto1);
    $classe_alunni[2]->setIndirizzo(new Indirizzo("Viale IV Novembre", "40", "50032", "FI"));
    //! Riserializzazione JSON (boh ci andava di farlo)

    echo json_encode($classe_alunni);



    //TODO file_put_contents("alunni.json", $json);
