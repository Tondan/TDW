<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";


     
$nome           =$_POST['name'];     
$lastname       =$_POST['last-name'];
$phone          =$_POST['phone'];
$email          =$_POST['email'];
$message        =$_POST['message'];

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