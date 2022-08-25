<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0){
        $estensioni_permesse = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $nome_file = $_FILES["photo"]["name"];
        $tipo_file = $_FILES["photo"]["type"];
        $dimensione_file = $_FILES["photo"]["size"];

        //verifichiamo estensione file
        $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);
        if(!array_key_exists($estensione, $estensioni_permesse)) die ("ERRORE SELEZIONA UN FORMATO VALIDO");

        //verifichiamo dimensione
        $dimensione_massima = 5*1024*1024;
        if($dimensione_file > $dimensione_massima) die ("ERRORE SELEZIONE UNA GRANDEZZA MINORE");

        //verifichiamo il tipo MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            //controllare se il file esiste già
            if(file_exists("upload/" . $nome_file)){
                echo $nome_file . "esiste già";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $nome_file);
                echo "il tuo file è stato caricato con successo";
            }
        } else {
            echo "ERRORE CARICAMENTE RIPROVARE";
        }
    } else {
        echo "ERRORE" . $_FILES["photo"]["error"];
    }
}

?>