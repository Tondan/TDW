<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";


     
     
$data      = $_POST['date'];
$persone   = $_POST['persone'];
$tel       = $_POST['phone'];
$ora       = $_POST['time'];
$nome      = $_POST['name'];
$email     = $_POST['email'];
$note      = $_POST['notice'];

echo $data;
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
    header("location: pren_effettuata.php");
}

    
?>