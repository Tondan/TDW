<?php  
	require_once 'include/template2.inc.php';
	require_once 'include/dbms.inc.php';
	require("include/system.inc.php");

	if(isset($_GET['page'])){
		$p=$_GET['page']; 
	}
	else $p="home";
	$p=$p.".php";
	
	include ($p);
	
 

?>

