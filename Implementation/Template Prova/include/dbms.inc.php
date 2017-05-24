<?php

	/* DMBS.INC.PHP
	 * 
	 * 
	 */

	$host = "localhost";
	$username = "tdw";
	$password = "tdw";
	$database="tdw";

	$connect = mysql_connect($host, $username, $password);
	
	if ($connect) {
		
		$db = mysql_select_db('tdw');
	
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