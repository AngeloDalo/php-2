<?php

class Persona {
    static $conteggio = 0;
    public $nome;
    public $cognome;

    //costruttore
    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
        Persona::$conteggio++;
    }

    //non legato a nessuno istanza, se metto $this->nome non funziona
    static function prova(){
        echo Persona::$conteggio;
    }
}

echo Persona::prova();
echo Persona::$conteggio;
$persona1 = new Persona("luca", "rossi");
echo Persona::$conteggio;
$persona2 = new Persona("luca", "rossi");
echo Persona::$conteggio;
$persona1->prova();
$persona2->prova();


?>