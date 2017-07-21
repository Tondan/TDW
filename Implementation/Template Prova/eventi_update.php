<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/";


$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$data          = mysql_real_escape_string($_POST['data']);
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


if($switch=="update"){   
    require "upload_in_Img.php";
    if(strcmp($target_file,$dir)==0){
        $target_file=$keyImg;
        $oid = mysql_query(" UPDATE  tdw.evento SET  Nome =  '$nome', Descrizione =  '$descrizione', Data='$data', Img= '$target_file' WHERE ID_Evento ='$key';");
    }
    else{
        $oid = mysql_query(" UPDATE  tdw.evento SET  Nome =  '$nome', Descrizione =  '$descrizione', Data='$data', Img= '$target_file' WHERE ID_Evento ='$key';");
        if($oid){
            $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
            if($idd)
                unlink($keyImg);
        }
    }



if($oid){
    echo("<br>update avvenuto correttamente");
    header("location:eventi_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
        } //fine switch==1  


else if($switch=="delete"){
    
    $idd = mysql_query("DELETE FROM tdw.evento WHERE ID_Evento='$key'");
       
if($idd){
    $idd=mysql_query("DELETE FROM tdw.Immagine WHERE Link='$keyImg'");
        if($idd)
            unlink($keyImg);
    echo("<br>delete avvenuto correttamente");
    header("refresh:2; eventi_manager.php");
} else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
}     
?>
