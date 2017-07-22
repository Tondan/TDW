<?php

session_start();
$dir="Img/";
require "include/dbms.inc.php";
require "include/auth1.inc.php";


$key            = mysql_real_escape_string($_POST['key']);

if($key==0){
    $keyImg        = mysql_real_escape_string($_POST['keyImg']);
    require "upload_in_Img.php";
    if(strcmp($target_file,$dir)==0){
        $target_file=$keyImg;
        
        $oid = mysql_query("UPDATE tdw.faq SET Img = '$target_file' WHERE ID_FAQ = '$key';");
                                    }
    else{
        $oid = mysql_query("UPDATE tdw.faq SET Img = '$target_file' WHERE ID_FAQ = '$key';");
        if($oid){
            $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
            if($idd)
                unlink($keyImg);}
        }


if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; faq_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
}
else{



$domanda        = mysql_real_escape_string($_POST['domanda']);
$risposta       = mysql_real_escape_string($_POST['risposta']);


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
    $oid = mysql_query(" UPDATE tdw.faq SET Domanda =  '$domanda', Risposta =  '$risposta' WHERE ID_FAQ ='$key';");


if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; faq_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
        } //fine switch==1  


else if($switch=="delete"){
    
    $idd = mysql_query("DELETE FROM tdw.faq WHERE ID_FAQ='$key'");
       
    echo("<br>delete avvenuto correttamente");
    header("refresh:2; faq_manager.php");
} else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
}
?>