<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/Loghi/";

$change_name=0;
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
        
        $oid = mysql_query("UPDATE tdw.Logo SET Logo = '$target_file' WHERE Logo = '$keyImg';");
                                    }
    else{
        $oid = mysql_query("UPDATE tdw.Logo SET Logo = '$target_file' WHERE Logo = '$keyImg';");
        if($oid){
            $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
            if($idd)
                unlink($keyImg);}
        }


if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; header_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
     
?>