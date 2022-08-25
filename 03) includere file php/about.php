<?php require 'esempio.php'
//require ci da errore se file non presente
//include non da errore se file non presente
//_once evita errori con duplicati
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <?php include 'menu.html'; ?>
    <h1>homepage</h1>
    <?php saluta(); ?>
</body>

</html>