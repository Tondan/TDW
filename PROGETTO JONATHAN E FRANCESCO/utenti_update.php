<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$lastusername   = $_POST['lastusername'];
$username   = $_POST['username'];
$nome       = $_POST['nome'];
$cognome    =$_POST['cognome'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$idgruppo   = $_POST['gruppo'];
$keyusergroup   = $_POST['keyusergroup'];

echo($keyusergroup);
echo($lastusername);
echo($username);
echo($nome);
echo($cognome);
echo($email);
echo($password);
echo($idgruppo);
$password=md5($password);

 
$oid = mysql_query(" UPDATE  `progetto`.`users` SET  `username` =  '$username', `password` = '$password'  ,            `name` =  '$nome', `surname` =  '$cognome', `email` =  '$email' WHERE  `users`.`username` =  '$lastusername'; ");




if($oid){
      $usergroup = mysql_query(" UPDATE  `progetto`.`users_groups` SET  `username` =  '$username',
`id_group` =  '$idgruppo' WHERE  `users_groups`.`ID` = '$keyusergroup'; ");
      if($usergroup){
          header("location: utenti_manager.php");
      }      
} else{
    echo("<br>Inserimento non eseguito");
  }
 
?>


