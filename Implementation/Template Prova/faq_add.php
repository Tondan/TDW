<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$data          = mysql_real_escape_string($_POST['data']);


/*echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $img,"<br>\n";*/




$oid = mysql_query(" INSERT INTO  tdw.evento (Data,Nome,Descrizione,Img) VALUES ('$data','$nome','$descrizione','$target_file');");




 
if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("refresh:2; eventi_manager.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>



