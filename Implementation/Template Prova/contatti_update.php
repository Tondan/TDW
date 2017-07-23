<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/";


$nome          = mysql_real_escape_string($_POST['titolo']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$indirizzo     = mysql_real_escape_string($_POST['indirizzo']);
$tel           = mysql_real_escape_string($_POST['tel']);
$fax           = mysql_real_escape_string($_POST['fax']);
$email         = mysql_real_escape_string($_POST['email']);
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
        
        $oid = mysql_query("UPDATE tdw.Contatti SET Titolo = '$nome', Descrizione = '$descrizione', Img = '$target_file', Indirizzo='$indirizzo', Tel='$tel', Fax='$fax', Email='$email' WHERE ID_Contatti = '$key';");
                                    }
    else{
        $oid = mysql_query("UPDATE tdw.Contatti SET Titolo = '$nome', Descrizione = '$descrizione', Img = '$target_file', Indirizzo='$indirizzo', Tel='$tel', Fax='$fax', Email='$email' WHERE ID_Contatti = '$key';");
        if($oid){
            $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
            if($idd)
                unlink($keyImg);}
        }


if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; contatti_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
     
?>