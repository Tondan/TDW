<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$username          = mysql_real_escape_string($_POST['username']);
$password          = mysql_real_escape_string($_POST['password']);
$passwordRip       = mysql_real_escape_string($_POST['passwordRip']);




/*echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $tipo_piatto,"<br>\n";
echo $img,"<br>\n";*/

if($password==$passwordRip)
    $oid = mysql_query(" INSERT INTO  tdw.users (username,password) VALUES ('$username',md5('$password'));");
else{
    echo("<br>ERRORE PASSWORD<br>");
    header("refresh:2; utenti_manager.php");
}

if($oid){
    $oid = mysql_query(" INSERT INTO  tdw.usergroups (username,id_group) VALUES ('$username','1');");
    

    echo("<br>Inserimento avvenuto correttamente");
    header("refresh:2; admin.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>

