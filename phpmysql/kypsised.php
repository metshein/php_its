<?php
    //vaja meeles pidada, keel, theme
    // setcookie("nimi","Mario", time()-3600);

    //ostukorv, login
    // session_start();
    // $_SESSION['login'] = "true";
    // var_dump($_SESSION['login']);

    $pw = "admin123";

    $hash = password_hash($pw, PASSWORD_DEFAULT);

print_r($hash);
echo "<br>";
    if(password_verify("admin", $hash)){
        echo "ok";
    } else {
        echo "kõik on valesti";
    }










?>