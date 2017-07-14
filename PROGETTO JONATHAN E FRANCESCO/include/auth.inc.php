<?php

	/* AUTH.INC.PHP
	 * 
	 * 
	 */

	function sanitize($var) {
		// clean up data
	
		return $var;
	}
	
	
	foreach($_POST as $index => $value) {
		$_POST[$index] = sanitize($value);
	}
	
	/*
	 * CHECK WHETHER THE SESSION IS ACTIVE
	 * 
	 * 
	 */
	
	if (!isset($_SESSION['user'])) {
	
	
		$oid = mysql_query("
			SELECT username, name, surname, email
			FROM users
			WHERE username = '{$_POST['username']}'
				AND password = md5('{$_POST['password']}')
			");
		
		if (!$oid) {
			echo "Error";
			exit;
		}
	
		if (mysql_num_rows($oid) == 0) {
			Header("Location: dashboard-home.php?result=userunknown");
			exit;
		}
	
		$data = mysql_fetch_assoc($oid);
		$_SESSION['user'] = $data;
	
		$oid = mysql_query("
				SELECT groups_services.script
				FROM users
			 LEFT JOIN users_groups
			 ON users.username = users_groups.username
			 LEFT JOIN groups
			 ON users_groups.id_group = groups.id
			 LEFT JOIN groups_services
			 ON groups_services.id_group = groups.id
			 LEFT JOIN services
			 ON services.script = groups_services.script
			 WHERE groups_services.script IS NOT NULL
			 AND users.username = '{$_POST['username']}'
			 AND users.password = md5('{$_POST['password']}')
			 ");
		
		if (!$oid) {
			echo "Error";
			exit;
		}
		
		do {
			$data = mysql_fetch_assoc($oid);
			if ($data) {
				$script[$data['script']] = $data;
			}
		} while ($data);
		
		$_SESSION['user']['permission'] = $script;
	
	}
	
	if (!isset($_SESSION['user']['permission'][basename($_SERVER['SCRIPT_NAME'])])) {
		print_r($_SERVER['SCRIPT_NAME']);
		echo "Warning: non sei autorizzato";
		exit;
	} 
	
?>