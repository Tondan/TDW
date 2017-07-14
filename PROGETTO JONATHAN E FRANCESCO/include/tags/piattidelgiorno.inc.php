<?php

	Class piattidelgiorno extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getpiattidelgiorno($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			
			
			$oid = mysql_query("SELECT * FROM `piatti` WHERE flag_del_giorno = '{$pars['flag']}' ");
			if (!$oid) {
				trigger_error(" error");
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