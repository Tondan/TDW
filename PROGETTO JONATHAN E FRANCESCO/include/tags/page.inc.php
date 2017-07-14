<?php

	Class page extends TagLibrary {
		
		function dummy() {
			
		}
		
		function gettitolo($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			

			
			$oid = mysql_query("SELECT * FROM page WHERE titolo='{$pars['titolo']}' ");
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