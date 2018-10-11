<?php

	Class materiediv extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmaterieprime($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			

			
			$oid = mysql_query("SELECT * FROM materieprime order by position  ");
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