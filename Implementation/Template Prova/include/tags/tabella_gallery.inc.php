<?php

	Class tabella_gallery extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$gll = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.gallery WHERE ID_Gallery=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
            $data = mysql_fetch_array($oid);

            if ($data) {
                $gll->setContent("ImgUp",$data['Img']);
            }
            
            $op=mysql_query("SELECT * FROM tdw.Gallery WHERE ID_Gallery>0");
            if (!$op) {
				trigger_error("Menu error");
            }
           do{
                $data = mysql_fetch_array($op);
                if($data)
                    $gll->setContent($data);
            }while($data);
            
            return $gll->get();
		}
		
	}