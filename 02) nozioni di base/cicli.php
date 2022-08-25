<?php
//FOR E FOREACH
for ($i=0; $i<10; $i++){
    if($i == 3){
        continue;
    }
    if($i == 4){
        break;
    }
    echo $i;
}
$persona = [
    "nome" => "luca",
    "cognome" => "rossi",
    "eta" => 15,
];
foreach($persona as $chiave => $valore){
    echo $valore . "<br>";
}

//WHILE
$i=0;
while ($i<5){
    echo $i;
    $i++;
}

//DO WHILE
$i=0;
do {
    echo $i;
    $i++;
}while($i<5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for($i=0; $i<5; $i++) : ?>
            <li>list item <?php echo $i ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>