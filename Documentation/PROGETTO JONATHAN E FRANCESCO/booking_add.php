<?php

require "include/template2.inc.php";
require "include/dbms.inc.php";


     
     
$nome      = $_POST['book_name'];
$email     = $_POST['email'];
$data      = $_POST['Date'];
$ora       = $_POST['Time'];
$persone   = $_POST['People'];
$telefono  = $_POST['Phone'];
$pagamento = $_POST['People-pay'];
$richieste = $_POST['request'];
$vista     = $_POST['select'];

echo $data;
/*
echo $nome,"<br>\n";
echo $email,"<br>\n";
echo $data,"<br>\n";
echo $ora,"<br>\n";
*/
$oid = mysql_query("INSERT INTO prenotazione (ID, nome, email, data, ora, numero_persone, telefono, vista, pagamento, richieste) 
                    VALUES (NULL, '$nome', '$email', '$data', '$ora', '$persone', '$telefono', '$vista', '$pagamento', '$richieste')");
if($oid){
	header("location: index.php?page=booking&result=ok");
    echo("<br>prenotazione avvenuta correttamente");
} 
else{
    echo("<br>Inserimento non eseguito");
}

    
?>


