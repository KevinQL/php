<?php

/**
* 
*/
class Template{
	
	public function mostrarPagina(){
		include "views/template1.php";
	}
	
	public function navegarPagina(){

		if (isset($_GET["pag"])) {

			$nav = $_GET["pag"];
			
		}else{
			$nav = "main";
		}

		include "views/modulo1/".Modulo::controlarNav($nav).".php";

	}


}

?>