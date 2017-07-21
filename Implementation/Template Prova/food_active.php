<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

$img          = mysql_real_escape_string($_POST['switch']);
$active       = mysql_real_escape_string($_POST['switch-active']);

if($img!=""){
    $oid=mysql_query("UPDATE tdw.immagine SET Attivo=0 WHERE Link='$active'");
        if($oid){
            $oid=mysql_query("UPDATE tdw.immagine SET Attivo=1 WHERE Link='$img'");
            echo "Update avvenuto correttamente";
            header("refresh:2;array-manager.php");
        }
    
}