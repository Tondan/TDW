<?php
require 'include/dbms.inc.php';
/*
    foreach($_POST as $index => $value) {
        echo $index,": ", $value, "<br/>\n";
    }
*/

$name = $_POST['nome'];
$description = $_POST['descrizione'];
$date= $_POST['data'];

echo $name,"<br>\n";
echo $description,"<br>\n";
echo $date,"<br>\n";


$oid = mysql_query("INSERT INTO eventi
			(id, nome, descrizione, data, parent, position)
			VALUES
			(NULL, '$name', '$description', '$date',0,0)");

//declare in the order variable
/*$oid = mysql_query($toinsert);*/	
if($oid){
	echo("<br>Inserimento avvenuto correttamente");
} else{
	echo("<br>Inserimento non eseguito");
}
echo "sono qui";
?>