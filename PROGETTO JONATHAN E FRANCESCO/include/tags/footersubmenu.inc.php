<?php

	Class footersubmenu extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getsubmenu($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			
			
			$oid = mysql_query("SELECT * FROM menu WHERE parent = {$pars['parent']} ORDER BY position");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				//echo($data);
				if ($data) {
					
					$menu->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
			
			return $menu->get();
		}
		
	}