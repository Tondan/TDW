<?php


    class menubody extends TagLibrary {
		
		function dummy() {
			
		}
        
        function getimage($name, $data, $pars) {
			
			$img = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Immagine WHERE Link='Img/ristpizz.jpg'");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$img->setContent($data);
				}
			} while ($data);
            
            
			return $img->get();
		}
        
        function getprimi($name, $data, $pars) {
			
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
    
        
        
        function getsecondi($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='secondo'");
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
        
        
        function getcontorni($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='contorno'");
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
        
        
        function getdrinks($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='drink'");
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
        
        
        function getpizze($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='pizza'");
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