<?php
//ARRAY
$citta = ['milano', 'firenze', 'roma'];
$citta[1] = 'napoli';
sort($citta); //ordine alfabetico
rsort($citta); //ordine alfabetico contrario
array_push($citta, 'firenze'); //aggiungo elemento in coda
array_pop($citta); //toglie ultimo elemento
array_unshift($citta, 'napoli'); //inserisco elemento davanti
array_shift($citta); //toglie primo elemento

//ARRAY ASSOCIATIVI CON CHIAVE VALORE
$persona = [
    "nome" => "Luca",
    "cognome" => "Rossi",
    "eta" => 23
];
echo $persona["nome"];
foreach($persona as $chiave => $valore){
    echo $chiave . ' => ' . $valore . "<br>";
}
ksort($persona); //ordine per chiave alfabetica
krsort($persona); //orine per chiave alfabetico contrario  
asort($persona); //ordine per valore alfabetica
arsort($persona); //orine per valore alfabetico contrario
//ARRAY MULTIDIMENSIONALI
$classi = [
    ["Luca", "Marco", "Anna"],
    ["Leonardo", "Mattia", "Paolo"]
];
echo $classi[0][1];
for ($i=0; $i<count($classi); $i++){
    echo "Classe: " . $i . "<br>";
    for($y=0; $y<count($classi[$i]); $y++){
        echo $classi[$i][$y] . "<br>";
    }
}
?>

