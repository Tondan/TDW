<?php


    class homeBody extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getslider($name, $data, $pars) {
			
			$slider = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Slider");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$slider->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $slider->get();
		}
		
        function getfoodimages($name, $data, $pars) {
			
			$food = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $pippa=mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,4)='food'AND Attivo=1");  
            if (!$oid) {
				trigger_error("Menu error");
            }
            
			$oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,4)='food' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
				$first = mysql_fetch_array($pippa);
				
				if ($first)
					$food->setContent("First", $first['Link']);
            
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $food->get();
		}
        
        function getdessertsimages($name, $data, $pars) {
			
			$desserts = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $pippa=mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,8)='desserts'AND Attivo=1");  
            if (!$oid) {
				trigger_error("Menu error");
            }
            
			$oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,8)='desserts' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
				$first = mysql_fetch_array($pippa);
				
				if ($first)
					$desserts->setContent("First", $first['Link']);
            
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$desserts->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $desserts->get();
		}
        
        function getdrinksimages($name, $data, $pars) {
			
			$drinks = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $pippa=mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,6)='drinks'AND Attivo=1");  
            if (!$oid) {
				trigger_error("Menu error");
            }
            
			$oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,6)='drinks' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
				$first = mysql_fetch_array($pippa);
				
				if ($first)
					$drinks->setContent("First", $first['Link']);
            
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$drinks->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $drinks->get();
		}
        
        function gethome($name, $data, $pars) {
			
			$home = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Home");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$home->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $home->get();
		}
    }


   /*     function getHome($name, $data, $pars) {
			
			$menu = new Template("template/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT Titolo,Descrizione FROM Home");
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
        
        function getImg($name, $data, $pars) {
			
			$menu = new Template("template/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT Img FROM Home");
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