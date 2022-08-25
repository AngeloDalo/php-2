<?php

session_start();
$_SESSION["user_id"] = 23;
echo $_SESSION["user_id"];

//rimuovere dati
unset($_SESSION["user_id"]);

//distruggere
session_destroy();

?>