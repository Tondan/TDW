<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/Loghi/";


$key           = mysql_real_escape_string($_POST['key']);
$switch        = $_POST['switch'];  //radio button
$keyIcona      = mysql_real_escape_string($_POST['keyIcona'.$switch]);




/*
echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $orario_pasto,"<br>\n";
echo $presentazione,"<br>\n";
echo $piattodelgiorno,"<br>\n";*/


require "upload_in_Img.php";
if(strcmp($target_file,$dir)==0){
    $target_file=$keyIcona;
    $oid = mysql_query(" UPDATE  tdw.home SET Icona='$target_file' WHERE ID_Home ='$switch';");
}
else{
    $oid = mysql_query(" UPDATE  tdw.home SET Icona='$target_file' WHERE ID_Home ='$switch';");
    if($oid){
        $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyIcona'");
        if($idd)
            unlink($keyIcona);
    }
}

if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2;home_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }