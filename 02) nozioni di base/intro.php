<?php
//SCOPE
$nome = 'io';
function saluta() {
    $GLOBALS['nome'] = 'tu';
    echo $GLOBALS['nome'];
}
saluta();
echo ' ' . $nome;

//COSTANTI
define('INDIRIZZO', 'Piazza');
const ADDRESS = 'Viale'; //No definibile nelle funzioni

//TIPI DI DATI
$nome2 = 'luca';
$eta = 24;
$temperatura = 36.87;
$is_online = true;
$interessi = ['calcio', 'bascket'];
$altro = null;
class Persona {
    public $nome;
    public $cognome;
    public function _construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}
$persona1 = new Persona('orazio', 'rossi');

//STRINGHE
$frase = 'lorem ipsum dolor sit';
$frase2 = 'l\'albero';
echo $frase . $frase2;
echo strlen($frase); //lunghezza partendo da 0
echo strtolower($frase);
echo strtoupper($frase);
echo trim($frase); //rimuovere spazi bianchi
echo str_word_count($frase); //numero parole
echo strrev($frase); //frase al contrario
echo strpos($frase, 'ipsum'); //n carattere in cui inizia la parola
echo substr($frase, 12, 5); //parti dal carattere 12 e prendi 5 caratteri
echo str_replace('ipsum', 'ciao', $frase); //sostituisce ipsum con ciao

//NUMERI
$operatore1 = 5;
$operatore2 = 5.10;
$operatore3 = '10'; //non è int
echo $operatore1 + $operatore3; //13 in js sarebbe 510
$operatore3 = (int)'10'; 
echo abs($operatore1); //numeri - diventano +
echo min(5, 45, 34);
echo max(5, 45, 34);
echo sqrt(9);
echo round($operatore2); //0.50 è in eccesso
echo rand(0, 10); //numero randomico da 0 a 10
?>

