<?php 
header("Content-type: image/jpg");  
require("include/dbms.inc.php");


$id= $_GET['key'];
$tabella= $_GET['tabella'];




//{$this->name}

$oid = mysql_query(" SELECT * FROM {$tabella} WHERE ID= '$id' ");




if(!$oid){
    echo("<br>errore");
    
} 

$image = mysql_fetch_array($oid); 

echo ($image[image]); 

?>
