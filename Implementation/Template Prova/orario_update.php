<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

for($i=1;$i<=7;$i++){
$orario          = mysql_real_escape_string($_POST['orario'.$i]);
$giorno          = mysql_real_escape_string($_POST['giorno'.$i]);
  
    $oid= mysql_query("UPDATE tdw.orario SET Orario='$orario' WHERE ID_Giorno='$i'");
    if(!$oid)
        break;
}



if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; oraio_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
 


?>
