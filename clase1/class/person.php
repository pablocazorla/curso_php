<?php

class person {
	// Attributes
	private $nombre = array();

	// Methods
	public function init($nom){
		$this->nombre = $nom;
	}
	public function listarNombres(){
		//return count($this->nombre);
		return $this->nombre;
	}

}
?>