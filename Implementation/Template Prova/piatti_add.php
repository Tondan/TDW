<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/";
require "upload_in_Img.php";

$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$ingredienti   = mysql_real_escape_string($_POST['ingredienti']);
$prezzo        = mysql_real_escape_string($_POST['prezzo']);
$tipo_piatto   = mysql_real_escape_string($_POST['tipo_piatto']);



/*echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $tipo_piatto,"<br>\n";
echo $img,"<br>\n";*/



$oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', '$target_file', '$tipo_piatto');");



if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("refresh:2; piatti_manager.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>

