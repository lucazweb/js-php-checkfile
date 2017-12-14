<?php

    if ($_POST['curso']){
        

        /* NO CASO DE UMA MATRIZ POR CURSO.
        
        $filename = $_POST['curso'];
        $path = 'cursos/';
        $url = $path . $filename . ".pdf";

        // No caso de um arquivo .. para cada filename passado..
        if (file_exists($url)) {
            echo "Arquivo " . $filename . ".pdf encontrado!";
            
        } else {
            echo "O arquivo " . $filename . ".pdf, não existe..";
            echo "url é : " . $url;
        }
        */


        // Contando arquivos de cada curso e devolvendo resposta
        $filename = $_POST['curso'];
        $path =  'cursos/' . $filename . '/';
        
        $matrizes = array();

        for($i=1; $i<13; $i++){

            $url = $path . $filename . $i . ".pdf";

            if (file_exists($url)) {
                //echo "Arquivo " . $filename . $i . ".pdf encontrado!";
                $matrizes[$i] = $url;
            } else {
                //echo "O arquivo " . $filename . $i . ".pdf, não existe..";
                //echo "url é : " . $url;
            }            
        }
        
        if(count($matrizes) > 0){
            $res = json_encode($matrizes);
            echo $res;
        }else{
            echo "sem_arquivos";
        }
    
    }else{
        echo "Opa, não identificou o post..";
    }


?>