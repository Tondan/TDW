<?php


    class events extends TagLibrary {
		
		function dummy() {
			
		}

function getimage($name, $data, $pars) {
			
			$img = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Immagine WHERE Link='Img/evento.jpg'");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$img->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $img->get();
		}
    
    function getevents($name, $data, $pars) {
			
			$event = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Evento");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$event->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $event->get();
		}
        
        
        function getall($name, $data, $pars) {
			
			$all = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			
            
            
            $oid = mysql_query("SELECT * FROM tdw.Evento WHERE ID_Evento=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
				$data = mysql_fetch_array($oid);
				
				if ($data) {
                    $all->setContent("Img1",$data['Img']);
					$all->setContent("TitoloP",$data['Nome']);
                    $all->setContent("DescrizioneP",$data['Descrizione']);
				}
            
            $oid = mysql_query("SELECT * FROM tdw.evento WHERE ID_Evento=1");
			if (!$oid) {
				trigger_error("evento error");
			}
            $data = mysql_fetch_array($oid);
            $all->setContent("ImgC",$data['Img']);
			
            
            
            $oid = mysql_query("SELECT * FROM tdw.Evento WHERE ID_Evento>1");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$all->setContent("Data",$data['Data']);
					$all->setContent("Titolo",$data['Nome']);
                    $all->setContent("Img",$data['Img']);
                    $all->setContent("Descrizione",$data['Descrizione']);
				}
			} while ($data);
            
            
            
			return $all->get();
		}

    
    }

