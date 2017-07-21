<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

$img          = mysql_real_escape_string($_POST['switch']);


$oid=mysql_query("DELETE FROM tdw.immagine WHERE Link='$img'");
    if($oid){
        unlink($img);
        echo("<br>delete avvenuto correttamente");
        header("refresh:2; array_manager.php");
    } else{
        echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
    }