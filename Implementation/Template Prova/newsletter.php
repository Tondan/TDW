<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";


$email     = $_POST['email']; 




$oid = mysql_query("INSERT INTO tdw.Newsletter (ID_Mail,Email,Data) 
                    VALUES (NULL,'$email',CURDATE())");
if($oid){
	header("location: pren_effettuata.php");
} 
else{
    header("location: pren_fallita.php");
}

    
?>