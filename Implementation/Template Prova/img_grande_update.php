<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/";
$change_name=0;

$key           = mysql_real_escape_string($_POST['key']);
$keyImg        = mysql_real_escape_string($_POST['keyImgGrande']);




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
    $target_file=$keyImg;
    $oid = mysql_query(" UPDATE  tdw.home SET Img='$target_file' WHERE ID_Home ='$key';");
}
else{
    $oid = mysql_query(" UPDATE  tdw.home SET Img='$target_file' WHERE ID_Home ='$key';");
    if($oid){
        $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
        if($idd)
            unlink($keyImg);
    }
    else
        echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
}

if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2;home_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }