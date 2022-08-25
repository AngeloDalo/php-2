<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>compila il modulo</h1>
    <!-- con GET http://localhost:81/PHP/PHP2/05)%20form%20get%20e%20post/esempio.php?nome=ANGELO&cognome=DALO-->
    <!--appendo cose all'url-->
    <form action="esempioGet.php" method="GET">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome">
        <input type="submit" value="invia modulo">
    </form>

    <!--con POST dati non mostrati nell'url-->
    <form action="esempioPost.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome">
        <input type="submit" value="invia modulo">
    </form>
</body>

</html>