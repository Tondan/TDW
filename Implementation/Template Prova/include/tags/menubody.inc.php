<?php


    class menubody extends TagLibrary {
		
		function dummy() {
			
		}
        
        function getfood($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='primo'");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food1->setContent($data);
				}
			} while ($data);
            
            
			return $food1->get();
		}
    
        
        
        
    
        function getdessert($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='dessert'");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food1->setContent($data);
				}
			} while ($data);
            
            
			return $food1->get();
        }
    }
?>