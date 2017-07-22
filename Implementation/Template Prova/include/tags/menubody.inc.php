<?php


    class menubody extends TagLibrary {
		
		function dummy() {
			
		}
        
        function getimage($name, $data, $pars) {
			
			$img = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Rist_Pizz WHERE ID_Rist_Pizz=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$img->setContent("Link",$data['Img']);
				}
			} while ($data);
            
            
			return $img->get();
		}
        
        
        function getarticle($name, $data, $pars) {
			
			$art = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
            
            $oid = mysql_query("SELECT * FROM tdw.Rist_Pizz WHERE Categoria='{$pars['menu']}'");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			for($i=1;$i<=2;$i++){
                $data = mysql_fetch_array($oid);
                if($data){
					$art->setContent("Titolo".$i,$data['Titolo']);
                    $art->setContent("Img".$i,$data['Img']);
                    $art->setContent("Descrizione".$i,$data['Descrizione']);
				}
			}
			return $art->get();
		}
        
        
        
        function getfood($name, $data, $pars) {
			
			$food1 = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.piatto WHERE tipo_piatto='{$pars['tipo']}'");
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