<?php

abstract class Persona {
    public $nome;
    public $cognome;

    //costruttore
    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

class Insegnante extends Persona implements entita {
    public $materia;
    public function __construct($nome, $cognome, $materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }

    public function cade_a_terra(){
        echo "tonf";
    }
}

abstract class Telefono{

}
class iphone extends Telefono implements entita{
    public function cade_a_terra(){
        echo "crack";
    }
}

interface entita{
    public function cade_a_terra();
}

$persona1 = new Persona("luca", "rossi");

$insegnante1 = new Insegnante("rosa", "rossi", "matematica");
//$insegnante1->prova();
// $persona1->nome = 'luca';
// $persona1->cognome = 'rossi';
// $persona1->saluta();

?>