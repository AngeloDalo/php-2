<?php
//IF ELSE
$nome = 'luca';
if ($nome == 'luca'){
    echo 'ciao luca';
} elseif ($nome == 'carlo') {
    echo 'ciao carlo';  
} else {
    echo 'non sei luca';
}

$numeri = 21;
switch($numeri){
    case 1:
        echo '1';
        break;
    case 2:
        echo '2';
        break;
    default:
        echo 'ciao';
}
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
    <?php $numero = 5;?>
    <?php if($numero==0): ?>
        <p>condizione verificata</p>
    <?php elseif ($numero==5): ?>
        <p>condizione2 verificata</p>
    <?php else: ?>
        <p>default</p>
    <?php endif; ?>
</body>
</html>