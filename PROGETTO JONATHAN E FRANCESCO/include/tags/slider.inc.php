<?php

	Class slider extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenus($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			

			
			$oid = mysql_query("SELECT * FROM slider join slide ON slider.ID=slide.id_slider order by position ");
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