<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

for($i=1;$i<=8;$i++){
$nome          = mysql_real_escape_string($_POST['nome'.$i]);
  
    $oid= mysql_query("UPDATE tdw.Header SET Nome='$nome' WHERE ID_Header='$i'");
    if(!$oid)
        break;
}



if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; header_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
 


?>
