<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$img           = mysql_real_escape_string($_POST['img']);
$data          = mysql_real_escape_string($_POST['data']);


/*echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $img,"<br>\n";*/



$imdb= mysql_query("SELECT Link FROM tdw.Immagine WHERE Link='Img/$img'");
if(mysql_num_rows($imdb)==1)
    $oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', 'Img/$img', '$tipo_piatto');");
else{
    $oid=mysql_query(" INSERT INTO tdw.Immagine(Link) VALUES ('Img/$img')");
    if($oid)
        $oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', 'Img/$img', '$tipo_piatto');");
}



 
*/
if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("refresh:2; admin.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>

