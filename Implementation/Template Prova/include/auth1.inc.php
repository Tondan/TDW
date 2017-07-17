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
	
	
		$oid = mysql_query("SELECT * FROM tdw.users WHERE username='{$_POST['username']}'AND password = MD5('{$_POST['password']}')");
		
		if (!$oid) {
			echo "Error_query";
			exit;
		}
	
		if (mysql_num_rows($oid) == 0) {
			Header("Location: dashboard-home.php?result=userunknown");
			exit;
		}
	
		$data = mysql_fetch_assoc($oid);
		$_SESSION['user'] = $data;
	
		$oid = mysql_query("
            SELECT tdw.groupservices.script
            FROM tdw.users
            LEFT JOIN tdw.usergroups
            ON tdw.users.username = tdw.usergroups.username
            LEFT JOIN tdw.groups
            ON tdw.usergroups.id_group = tdw.groups.id
            LEFT JOIN tdw.groupservices
            ON tdw.groupservices.id = tdw.groups.id
            LEFT JOIN tdw.services
            ON tdw.services.script = groupservices.script
            WHERE tdw.groupservices.script IS NOT NULL
            AND tdw.users.username = '{$_POST['username']}'
            AND tdw.users.password = md5('{$_POST['password']}')
            ");
        
		if (!$oid) {
			echo "Error_query2";
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
        echo var_dump($_SESSION);
		echo "Warning: non sei autorizzato a visualizzare questa pagina";
		exit;
	} 
	
?>
