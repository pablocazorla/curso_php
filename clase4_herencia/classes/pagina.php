<?php 

	class Valores {

		// Con protected, los valores van a estar disponibles en otra clase. Sino, no se pueden acceder desde una clase hija.
		protected $valor1;
		protected $valor2;
		protected $resultado;

		public function load1($v){
			$this->valor1  = $v;
		}
		public function load2($v){
			$this->valor2  = $v;
		}
		public function render(){
			echo $this->resultado;
		}

	}
	// Herencia: Sumar es hija de Valores
	class Sumar extends Valores	{

		public function operar(){
			$this->resultado = $this->valor1 + $this->valor2;
		}

	}

?>