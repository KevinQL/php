<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=phpbasico","root","");
		return $link;

	}

}

?>