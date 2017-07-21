<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$titolo          = mysql_real_escape_string($_POST['titolo']);
$indirizzo       = mysql_real_escape_string($_POST['indirizzo']);
$tel             = mysql_real_escape_string($_POST['tel']);

  
    $oid= mysql_query("UPDATE tdw.footer SET Titoletto='$titolo',Indirizzo='$indirizzo',Tel='$tel' WHERE ID_Foot='1'");
    if(!$oid)
        break;



if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; admin.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
 


?>