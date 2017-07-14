<?php

	Class tabella_utenti extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			
			
			$oid = mysql_query("SELECT users.username, password, users.name AS nameu, surname, email, groups.ID, groups.name AS nameg , users_groups.ID AS keyusergroup
                FROM users
                JOIN users_groups ON users.username = users_groups.username
                JOIN groups ON users_groups.id_group = groups.ID  ");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$menu->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
			
			return $menu->get();
		}
		
	}