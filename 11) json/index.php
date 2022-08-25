<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let formData = new FormData();
        formData.append('data', 'colori');

        fetch('esempio.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => console.log(data));
    </script>
</body>
</html>