<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$nome          = mysql_real_escape_string($_POST['key']);
$descrizione   = mysql_real_escape_string($_POST['domanda']);

$key           = mysql_real_escape_string($_POST['risposta']);


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
    $oid = mysql_query(" UPDATE  tdw.evento SET  Nome =  '$nome', Descrizione =  '$descrizione', Data='$data', Img= '$target_file' WHERE ID_Evento ='$key';");


if($oid){
    echo("<br>update avvenuto correttamente");
    header("location:faq_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
        } //fine switch==1  


else if($switch=="delete"){
    
    $idd = mysql_query("DELETE FROM tdw.evento WHERE ID_Evento='$key'");
       
    echo("<br>delete avvenuto correttamente");
    header("refresh:2; faq_manager.php");
} else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }     
?>