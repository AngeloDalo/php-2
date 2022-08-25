<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="esempio.php" method="POST" enctype="multipart/form-data">
        <h2>carica file</h2>
        <label for="fileSelect">file:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Carica">
        <p><strong>Nota:</strong>sono permessi formati .jpg .jpeg .gif .png</p>
    </form>
</body>
</html>