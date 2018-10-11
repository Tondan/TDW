<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];
$slider      = $_POST['slider'];
$position = $_POST['position'];
$id = $_POST['key'];

echo $slider,"<br>\n";
echo $position,"<br>\n";
echo $id,"<br>\n";


if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/top-slider/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);
	$oid = mysql_query(" 
          UPDATE  `progetto`.`slide` SET  
                  `id_slider` =  '$slider',
                  `image_filename` =  '$percorso',
                  `position` =  '$position' 
                  WHERE  `slide`.`ID` ='$id';

    ");

}
else{
	$oid = mysql_query(" 
          UPDATE  `progetto`.`slide` SET  
                  `id_slider` =  '$slider',
                  `position` =  '$position' 
                  WHERE  `slide`.`ID` ='$id';

    ");
}


if($oid){
	header("location: slide_manager.php");
}
else{
    echo("<br>Inserimento non eseguito");
}
  
?>