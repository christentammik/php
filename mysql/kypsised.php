<?php
    //vaja meeles pidada, keel, theme
    //setcookie("nimi", "Christen", time()-3600);

    // //ostukord, login
    // session_start();
    // $_SESSION["nimi"] = "Christen";
    // //echo $_SESSION["nimi"];

    // print_r($_SESSION['nimi']);


    $pw = "admin123";

    $hash = password_hash($pw, PASSWORD_DEFAULT);
    print_r($hash);

    if(password_verify("admin", $hash)){
        echo "<br>Parool õige";
    } else {
        echo "<br>Parool vale";
    }

?>