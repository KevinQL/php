<?php 
	
	/**
	* 
	*/
	class Modulo{
		
		public function controlarNav($ur){
			# code...
			if ($ur == "inicio" ||
				$ur == "contactos" ||
				$ur == "servicios") {
				# code...
				$navegar = $ur;
			}else{
				$navegar = "inicio";
			}

			return $navegar;
		}


	}


 ?>