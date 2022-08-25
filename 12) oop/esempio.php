<?php

class Persona {
    public $nome;
    public $cognome;
    protected $eta;
    private $telefono;

    //costruttore
    function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    //Get e Set
    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }

    function set_cognome($cognome){
        $this->cognome = $cognome;
    }
    function get_cognome(){
        return $this->cognome;
    }

    function set_eta($eta){
        $this->eta = $eta;
    }
    function get_eta(){
        return $this->eta;
    }

    function set_telefono($telefono){
        $this->telefono = $telefono;
    }
    function get_telefono(){
        return $this->telefono;
    }

    //metodo
    //se metto protected function non posso chiamarla in insegnante nel caso in cui insegnante non abbia la funzione saluta
    //questo non funziona con il private
    function saluta(){
        echo "ciao sono" . $this->nome . $this->cognome; 
    }
}

class Insegnante extends Persona {
    public $materia;
    public function __construct($nome, $cognome, $materia){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materia = $materia;
    }
    function saluta(){
        echo "buongiorno sono" . $this->nome . $this->cognome; 
    }
    //se sopra metto protected funcion
    // function prova(){
    //     $this->saluta();
    // }
}

$persona1 = new Persona("luca", "rossi");
$persona1->set_eta(24);
echo $persona1->get_nome();

$insegnante1 = new Insegnante("rosa", "rossi", "matematica");
$insegnante1->saluta();
//$insegnante1->prova();
// $persona1->nome = 'luca';
// $persona1->cognome = 'rossi';
// $persona1->saluta();

?>