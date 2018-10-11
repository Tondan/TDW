<?php

	/* DMBS.INC.PHP
	 * 
	 * 
	 */

	$host = "localhost";
	$username = "root1";
	$password = "webpass";
	$database="progetto";

	$connect = mysql_connect($host, $username, $password);
	
	if ($connect) {
		
		$db = mysql_select_db('progetto');
	
		/*if ($db) {
				
		}else {
			echo "Error";
			exit;
		}*/
	} else {
		echo "Error";
		exit;
	}

?>