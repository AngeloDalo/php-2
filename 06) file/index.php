<?php
//r=leggere r+=leggere e scrivere, se non esiste lo crea, non pulisce contenuto
//w=scrivere pulendo il file w+=legge e scrive, se non esiste lo crea
//a=append a+=appende e se non esiste file lo crea
//x=scrivere, se file esiste da errore x+=legge e scrive, se esiste da errore

//LETTURA
$nomeFile = "note.txt";
if (file_exists($nomeFile)) {
    $file = fopen($nomeFile, "r");
    //1)
    $contant = fread($file, "20"); //20 = numero caratteri
    echo $contant;
    fclose($file);
    //2)
    $contant = fread($file, filesize($nomeFile)); //legge tutto il file
    echo $contant;
    fclose($file);
    //3)
    $content = file_get_contents($nomeFile);
    echo $content;
    fclose($file);
} else {
    echo "file non esiste";
}

//SCRITTURA
$nomeFile = "note.txt";
$testo = "frase da scrivere";
if (file_exists($nomeFile)) {
    $file = fopen($nomeFile, "w"); //posso mettere a
    //!)
    fwrite($file, $testo);
    fclose($file);
    //2)
    file_put_contents($nomeFile, $testo);
    fclose($file);
} else {
    echo "file non esiste";
}

//RINOMINARE ED ELIMINARE
if (file_exists($nomeFile)) {
    rename($nomeFile, "testo.txt");
    unlink($nomeFile);
} else {
    echo "file non esiste";
}
?>
