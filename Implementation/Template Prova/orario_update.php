<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$orario          = mysql_real_escape_string($_POST['orario']);
$giorno          = mysql_real_escape_string($_POST['giorno']);






echo $orario,"<br>\n";
echo $giorno,"<br>\n";


   
    $oid= mysql_query("UPDATE tdw.orario SET Orario='$orario' WHERE Giorno='$giorno'");





if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:5; admin.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
 


?>
