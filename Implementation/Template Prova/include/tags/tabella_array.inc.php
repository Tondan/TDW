<?php

	Class tabella_array extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getfoodmenu($name, $data, $pars) {
			
			$food = new Template("html/{$pars['template']}.html");
            $food->setContent("Key",$pars['key']);
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $pippa=mysql_query("SELECT Link FROM tdw.immagine WHERE SUBSTRING(Link,5,4)='food'AND Attivo=1");  
            if (!$oid) {
				trigger_error("Menu error");
            }
            
			$oid = mysql_query("SELECT Link FROM tdw.immagine WHERE SUBSTRING(Link,5,4)='food' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
				$first = mysql_fetch_array($pippa);
				
				if ($first)
					$food->setContent("First", $first['Link']);
            
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent("LinkDelete",$data['Link']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
            $oid = mysql_query("SELECT Link FROM tdw.immagine WHERE SUBSTRING(Link,5,4)='food' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
            }
                
                do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent("LinkActive",$data['Link']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $food->get();
		}
        
        function getdessertsmenu($name, $data, $pars) {
			
			$food = new Template("html/{$pars['template']}.html");
            $food->setContent("Key",$pars['key']);
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $pippa=mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,8)='desserts'AND Attivo=1");  
            if (!$oid) {
				trigger_error("Menu error");
            }
            
			$oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,8)='desserts'AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
				$first = mysql_fetch_array($pippa);
				
				if ($first)
					$food->setContent("First", $first['Link']);
            
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent("LinkDelete",$data['Link']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
            $oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,8)='desserts'AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
            }
                
                do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent("LinkActive",$data['Link']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $food->get();
		}
        
        
        function getdrinksmenu($name, $data, $pars) {
			
			$food = new Template("html/{$pars['template']}.html");
            $food->setContent("Key",$pars['key']);
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $pippa=mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,6)='drinks' AND Attivo=1");  
            if (!$oid) {
				trigger_error("Menu error");
            }
            
			$oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,6)='drinks' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
				$first = mysql_fetch_array($pippa);
				
				if ($first)
					$food->setContent("First", $first['Link']);
            
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent("LinkDelete",$data['Link']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
            $oid = mysql_query("SELECT Link FROM tdw.Immagine WHERE SUBSTRING(Link,5,6)='drinks' AND Attivo=0");
			if (!$oid) {
				trigger_error("Menu error");
            }
                
                do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$food->setContent("LinkActive",$data['Link']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $food->get();
		}
		
	}
?>