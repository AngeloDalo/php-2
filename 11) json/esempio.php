<?php
//php riceve richiesta post
$richiesta = $_POST["data"];
//richiesta viene aggiunta al json
$strJsonFileContents = file_get_contents("$richiesta.json");
//ci da un array associativo
$array = json_decode($strJsonFileContents, true);
//echo '<pre>' . var_export($array['pokemon'][0]['name'], true) . '</pre>';
//invia json al js
echo json_encode($array);

?>