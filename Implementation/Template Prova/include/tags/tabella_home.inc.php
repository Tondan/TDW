<?php

	Class tabella_home extends TagLibrary {
		
		function dummy() {
			
		}
		function getmenu($name, $data, $pars) {
		$home = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Home WHERE ID_Home>0 LIMIT 2");
			if (!$oid) {
				trigger_error("Menu error");
			}
			$data = mysql_fetch_array($oid);
            if($data){
                $home->setContent("Icona1",$data['Icona']);
                $home->setContent("Titolo1",$data['Titolo']);
                $home->setContent("Descrizione1",$data['Descrizione']);
                $home->setContent("Img1",$data['Img']);
            }
            $data = mysql_fetch_array($oid);
            if($data){
                $home->setContent("Icona2",$data['Icona']);
                $home->setContent("Titolo2",$data['Titolo']);
                $home->setContent("Descrizione2",$data['Descrizione']);
                $home->setContent("Img2",$data['Img']);
            }
            
            
            $oid = mysql_query("SELECT Img FROM tdw.home WHERE ID_Home=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$home->setContent("ImgGrande",$data['Img']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
            
            return $home->get();
		}
		
	}