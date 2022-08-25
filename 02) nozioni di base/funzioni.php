<?php 

//FUNZIONE
function funzione1(){
    echo 'funzione';
}
funzione1();

//FUNZIONE ANONIMA
$prova = function(){
    echo 'prova';
};
$prova();

//SCOPE FUNZIONI
$numero = 5;
function funzione2(){
    //$GLOBALS['numero'] = 10; echo $GLOBALS['numero'];
    $numero = 10;
    echo $numero;
}
funzione2(); //10
echo $numero; //5

//FUNZIONE VALORI
function somma(int $valore1, $valore2, $valore3=100): int{
    $somma = $valore1 + $valore2 + $valore3;
    return $somma;
}
$somma = somma(1, 2);
?>