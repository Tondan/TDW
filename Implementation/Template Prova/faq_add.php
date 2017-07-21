<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$key            = mysql_real_escape_string($_POST['key']);
$domanda        = mysql_real_escape_string($_POST['domanda']);
$risposta       = mysql_real_escape_string($_POST['risposta']);


/*echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $img,"<br>\n";*/




$oid = mysql_query(" INSERT INTO  tdw.faq (ID_FAQ, Domanda, Risposta) VALUES (null,'$domanda','$risposta');");




 
if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("refresh:2; faq_manager.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>



