<?php
//modificatori di accesso

class Fruit {
    public $nome;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }
    protected function set_color($n){
        $this->color = $n;
    }
    private function set_weight($n){
        $this->weight = $n;
    }

    //modo per accedere alle funzioni non pubbliche
    //se ho classe figlia posso accedere alla funzione protected ma non la private
    function prova($n){
        $this->set_color($n);
    }
}

$mango = new Fruit();
$mango->set_name("mango");
//$mango->set_color("yellow");
$mango->prova("yellow");
//$mango->set_weight("300");
?>