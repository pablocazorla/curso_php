<?php 

	class cabecera {

		private $texto;
		public function __construct($titulo){
			$this->texto = $titulo;
		}
		public function render(){
			echo '<h1>' . $this->texto . '</h1>';
		}

	}

	class cuerpo {

		private $lineas = array();
	
		public function setLine($li){

			$this->lineas[]=$li;
		}
		public function render(){
			for($i = 0;$i<sizeof($this->lineas);$i++){
				echo '<p>' . $this->lineas[$i] . '</p>';
			}
		}
		
	}

	class pie {

		private $texto;
		public function __construct($titulo){
			$this->texto = $titulo;
		}
		public function render(){
			echo '<hr><h4>' . $this->texto . '</h4>';
		}

	}

	class pagina{
		private $header;
		private $body;
		private $footer;
		public function __construct($texto1,$texto2){
			$this->header = new cabecera($texto1);
			$this->body = new cuerpo();
			$this->footer = new pie($texto2);
		}

		public function setLine($texto){

			$this->body->setLine($texto);
		}

		public function render(){
			$this->header->render();
			$this->body->render();
			$this->footer->render();
		}
	}

?>