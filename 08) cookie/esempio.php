<?php

setcookie("username", "Luca Rossi", time()+60*60*24*30); //salvo usurname per 30g, andare console application cookies

if(isset($_COOKIE["username"])) {
    echo $_COOKIE["username"];
} else {
    echo "cookie non disponibile";
}

//eliminare cookie
setcookie("username", "", time()-3600);


?>