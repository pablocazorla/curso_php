<?php 

	class pagina {

		private $titulo;
		private $position;

		public function __construct($tit,$pos){
			$this->titulo = $tit;
			$this->position = $pos;
		}

		public function render(){
			echo '<h2 align="' . $this->position . '">' . $this->titulo . '</h2>';
		}

	}

?>