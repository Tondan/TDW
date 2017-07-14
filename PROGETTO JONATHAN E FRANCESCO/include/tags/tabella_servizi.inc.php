<?php

	Class tabella_servizi extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			
			
			$oid = mysql_query("SELECT services.script, services.name, services.description, id_group, groups.name AS gruppo, groups_services.ID AS keygroupservices
FROM services
JOIN groups_services ON services.script = groups_services.script
JOIN groups ON groups_services.id_group = groups.ID ");
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