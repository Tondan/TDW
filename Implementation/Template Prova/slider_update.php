<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/";

$titolo        = mysql_real_escape_string($_POST['titolo']);
$text          = mysql_real_escape_string($_POST['text']);
$key           = mysql_real_escape_string($_POST['key']);
$keyImg        = mysql_real_escape_string($_POST['keyImg']);



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
    $oid = mysql_query(" UPDATE  tdw.slider SET Img='$target_file',SliderTitle='$titolo',SliderText='$text' WHERE ID_Slider ='$key';");
}
else{
    $oid = mysql_query(" UPDATE  tdw.slider SET Img='$target_file',SliderTitle='$titolo',SliderText='$text' WHERE ID_Slider ='$key';");
    if($oid){
        $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
        if($idd)
            unlink($keyImg);
    }
}

if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2;slider_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
