<?php
//REGEX SEMPLICE
$testo = "Oggi è una splendida giornata anche se è prevista neve ";
//match semplice
//devo trovare parola che inizia con Og, un carattere tra g e k e finisce per i
$pattern = "/Og[gk]i/";
$pattern2 = "/Og[^gk]i/"; //^ negazione
$pattern3 = "/Og[a-z]i/"; //a-z dalla a alla z
$pattern4 = "/Og[a-z0-9]i/"; //a-z 0-9
$pattern5 = "/Og[0-9]i/"; //0-9
$pattern6 = "/Og[abc]i/"; //caratteri randomici
if(preg_match($pattern, $testo)){
    echo "match trovato ";
} else {
    echo "match non trovato ";
}

//REGEX OCCORRENZE
$pattern7 = "/è/";
$matches = preg_match_all($pattern7, $testo, $array);
echo $matches . " match sono stati trovati. ";

//CLASSI PREDEFINITE
//permettono di non scrivere molto
//\d=[0-9] \D=[^0-9] \s=[ \t\n\r] \S=[^ \t\n\r] \w=[a-zA-Z_0-9] \W=[^a-zA-Z_0-9] 
$nomeImmagine = "logo brand nero.png";
$patternSpazi = "/\s/";
$replacement = "_";
echo preg_replace($patternSpazi, $replacement, $nomeImmagine);

//QUANTIFICATORI
//p+ 1 o + occorrenze, p* 0 o più occorrenze, p? 0 o 1 occorrenza, p{2}, p{2,3} tra 2 e 3
//p{2,} 2 o +, p{, 3} max 3
$pattern8 = "/[\s,]+/"; //clase con spazio o virgola ripetute (+)
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);
//ogni volta che c'è una virgola o spazio si crea nuovo elemento array
foreach($parts as $part){
    echo $part . "<br>";
}

//ARRAY
//se una cosa si trova all'inzio o alla fine di una frase
//^p deve essere all'inizio, p$ deve essere alla fine
$pattern9 = "/^M/i"; //i=case insensitive
$names = array("marco", "luca", "Maria");
$matches2 = preg_grep($pattern9, $names);
foreach($matches2 as $match){
    echo $match . '<br>';
}

//LIMITI DI UNA PAROLA
$pattern10 = "/\bcar\w*/"; //parola che inizia con car, matcha qualsiasi carattere (w) per un numero infinite di volte dopo (*)
$replacement = '<b>50</b>';
$text = "Words begining with car: cart, carrot. Words ending with car: scar, oscar, supercar";
echo preg_replace($pattern10, $replacement, $text);
?>