<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";

    
$data      = mysql_real_escape_string($_POST['date']);
$persone   = mysql_real_escape_string($_POST['persone']);
$tel       = mysql_real_escape_string($_POST['phone']);
$ora       = mysql_real_escape_string($_POST['time']);
$nome      = mysql_real_escape_string($_POST['name']);
$email     = mysql_real_escape_string($_POST['email']);
$note      = mysql_real_escape_string($_POST['notice']);

// echo $data;
/*
echo $nome,"<br>\n";
echo $email,"<br>\n";
echo $data,"<br>\n";
echo $ora,"<br>\n";
*/


$oid = mysql_query("INSERT INTO tdw.Prenotazione (ID_Prenotazione,Data,Persone,Time,Nome_Cl,Tel,Email,Notice) 
                    VALUES (NULL, '$data', '$persone', '$ora', '$nome', '$tel', '$email', '$note')");
if($oid){
	header("location: pren_effettuata.php");
} 
else{
    header("location: pren_fallita.php");
}

    
?>