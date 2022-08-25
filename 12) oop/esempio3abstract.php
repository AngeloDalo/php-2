<?php

abstract class Persona {
    public $nome;
    public $cognome;

    //costruttore
    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    //metodo
    //saluta ma non ci interessa come
    abstract function saluta();
}

class Insegnante extends Persona {
    public $materia;
    public function __construct($nome, $cognome, $materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }
    //ESSENDO FIGLI DI ABSTRACT DEVE OBBLIGATORIAMENTE SALUTARE
    function saluta(){
        echo "buongiorno"; 
    }
}

$persona1 = new Persona("luca", "rossi");

$insegnante1 = new Insegnante("rosa", "rossi", "matematica");
$insegnante1->saluta();
//$insegnante1->prova();
// $persona1->nome = 'luca';
// $persona1->cognome = 'rossi';
// $persona1->saluta();

?>