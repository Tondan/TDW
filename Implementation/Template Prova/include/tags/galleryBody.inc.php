<?php


    class galleryBody extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getgallery($name, $data, $pars) {
			
			$gallery = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.gallery WHERE ID_Gallery=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$gallery->setContent("Link",$data['Img']);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
/*            $op=mysql_query("SELECT Categoria FROM tdw.Gallery");
            if (!$op) {
				trigger_error("Menu error");
            }
            for($i=1;$i<=3;$i++){
                $data = mysql_fetch_array($op);
                if($data)
                    $gallery->setContent("Cat".$i,$data['Categoria']); 
            }*/
            
            $op=mysql_query("SELECT * FROM tdw.Gallery WHERE ID_Gallery>0");
            if (!$op) {
				trigger_error("Menu error");
            }
            for($i=1;$i<=15;$i++){
                $data = mysql_fetch_array($op);
                if($data)
                    $gallery->setContent("Img".$i,$data['Img']);
                    $gallery->setContent("Categoria".$i,$data['Categoria']);
            }
            
			return $gallery->get();
		}
    }