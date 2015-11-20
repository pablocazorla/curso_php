<?php 

	class Operacion {
		protected $valor1;
		protected $valor2;
		protected $resultado;

		public function __construct($v1,$v2){
			$this->valor1 = $v1;
			$this->valor2 = $v2;
		}
		public function render(){
			return $this->resultado;
		}
	}

	class Suma extends Operacion{

		protected $titulo;

		// Extender un método: uso 'parent' para referir a la clase padre de suma. En este caso Operacion.
		public function __construct($v1,$v2, $tit){
			parent::__construct($v1,$v2);
			$this->titulo = $tit;
		}

		public function operar(){
			$this->resultado = $this->valor1 + $this->valor2;
		}
		
		public function render(){
			echo 'La suma de '. $this->titulo .' es ' . parent::render();
		}
	}

?>