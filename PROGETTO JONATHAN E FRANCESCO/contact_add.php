<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";

     
$nome      = $_POST['name'];
$email     = $_POST['email'];
$ogetto    = $_POST['subject'];
$messaggio  = $_POST['message'];


echo $nome;
echo $email,"<br>\n";
echo $ogetto,"<br>\n";
echo $messaggio,"<br>\n";


$oid = mysql_query("
    INSERT INTO  `progetto`.`contattaci` (`ID` ,`nome` ,`email` ,`oggetto` ,`testo`)
    VALUES ( NULL ,  '$nome',  '$email',  '$ogetto',  '$messaggio');
	");

if($oid){
	header("location: index.php?page=contact-us&result=ok");
    echo("<br>prenotazione avvenuta correttamente");
} 
else{
    echo("<br>Inserimento non eseguito");
}

    
?>


