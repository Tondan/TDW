<?php

	Class tabella_piatti extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$menu = new Template("html/{$pars['template']}.html");
			
			
			
			$oid = mysql_query("SELECT * FROM tdw.piatto");
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