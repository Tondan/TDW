<?php

	Class tabella_eventi extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$menu = new Template("html/{$pars['template']}.html");
			
			
			
			$oid = mysql_query("SELECT * FROM tdw.evento");
			if (!$oid) {
				trigger_error("evento error");
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