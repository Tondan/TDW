<?php

	Class leftmenu extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getleftmenu($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			return $menu->get();
		}
		
	}