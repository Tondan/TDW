<?php

	Class book extends TagLibrary {
		
		function dummy() {
			
		}
		
		function setbooking($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			return $menu->get();
		}
		
	}