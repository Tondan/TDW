<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/";


$nome          = mysql_real_escape_string($_POST['titolo']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$key           = mysql_real_escape_string($_POST['key']);
$keyImg        = mysql_real_escape_string($_POST['keyImg']);

$switch = $_POST['switch'];  //radio button


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
        
        $oid = mysql_query("UPDATE tdw.rist_pizz SET Titolo = '$nome', Descrizione = '$descrizione', Img = '$target_file' WHERE ID_Rist_Pizz = '$key';");
                                    }
    else{
        $oid = mysql_query(" UPDATE tdw.rist_pizz SET Titolo =  '$nome', Descrizione =  '$descrizione', Img ='$target_file' WHERE ID_Rist_Pizz = '$key';");
        if($oid){
            $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
            if($idd)
                unlink($keyImg);}
        }


if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; ristorante_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
     
?>