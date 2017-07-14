<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$username   = $_POST['username'];
$nome       = $_POST['nome'];
$cognome    =$_POST['cognome'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$idgruppo   = $_POST['gruppo'];


echo($username);
echo($nome);
echo($cognome);
echo($email);
echo($password);
echo($idgruppo);
$password=md5($password);

 

$oid = mysql_query(" INSERT INTO `progetto`.`users` (`username`, `password`, `name`, `surname`, `email`) VALUES ('$username', '$password', '$nome', '$cognome', '$email');
 ");

if($oid){
	$gruppi= mysql_query(" INSERT INTO `progetto`.`users_groups` (`ID`, `username`, `id_group`) VALUES ('', '$username', '$idgruppo');
 ");
	if($gruppi){
		header("location: utenti_manager.php");
	}
	
} else{
    echo("<br>Inserimento non eseguito");
  }
  
?>
