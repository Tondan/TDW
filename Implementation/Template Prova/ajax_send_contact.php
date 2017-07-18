<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";


     
$nome           =mysql_real_escape_string($_POST['name']);     
$lastname       =mysql_real_escape_string($_POST['last-name']);
$phone          =mysql_real_escape_string($_POST['phone']);
$email          =mysql_real_escape_string($_POST['email']);
$message        =mysql_real_escape_string($_POST['message']);

echo $data;
/*
echo $nome,"<br>\n";
echo $email,"<br>\n";
echo $data,"<br>\n";
echo $ora,"<br>\n";
*/
$oid = mysql_query("INSERT INTO tdw.Messaggi (ID_Messaggio,Nome,Cognome,Phone,Email,Message) 
                    VALUES (NULL, '$nome', '$lastname', '$phone', '$email', '$message')");
if($oid){
	header("location: home.php");
} 
else{
    header("location: contact.php");
}

    
?>