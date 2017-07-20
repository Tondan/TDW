<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
require "upload_in.php";

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



$imdb= mysql_query("SELECT Link FROM tdw.Immagine WHERE Link='Img/$img'");
if(mysql_num_rows($imdb)==1){
    $oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', '$target_file', '$tipo_piatto');");}
else{
    $oid=mysql_query(" INSERT INTO tdw.Immagine(Link) VALUES ('Img/$img')");
    if($oid)
        $oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', 'Img/$img', '$tipo_piatto');");
}



if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("refresh:2; admin.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>

