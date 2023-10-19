<!-- Polimorfismo e interfaces
● Crear una interfaz "iVehiculo" con los métodos "acelerar" y "frenar".
● Crear una clase "Automovil" que implemente la interfaz "iVehiculo".
● Crear una clase "Bicicleta" que también implemente la interfaz "iVehiculo".
● Agregar métodos para imprimir los datos del automóvil y la bicicleta en
pantalla..-->

<?php
	//Interface iVehiculo con sus 2 Metodos
	interface iVehiculo {
		public function acelerar($velocidad);
		public function frenar();
	}

	//Clase  Automovil
	class Automovil implements iVehiculo{
		private $marca;
		private $velocidadA;
		
		public function __construct($marca) {
			$this->marca = $marca;
			$this->velocidadA = 0;
		}
		public function acelerar($velocidad) {
			$this->velocidadA += $velocidad;
		}
	
		public function frenar() {
			$this->velocidadA = 0;
		}
	
		public function datos() {
			echo "El auto de marca {$this->marca} va con una velocidad de {$this->velocidadA} km/h <br>";
		}
	}
	$automovil = new Automovil("Toyota");
	$automovil->acelerar(95);
	$automovil->datos();


	//Clase  Bicicleta
	class Bicicleta implements iVehiculo {
		private $marca;
		private $velocidadA;

		public function __construct($marca) {
			$this->marca = $marca;
			$this->velocidadA = 0;
		}
		public function acelerar($velocidad) {
			$this->velocidadA += $velocidad;
		}
		public function frenar() {
			$this->velocidadA = 0;
		}
	
		public function datos() {
			echo "La bicicleta de marca {$this->marca} va con una velocidad de{$this->velocidadA} km/h";
		}
	}

	$bicicleta = new Bicicleta("Venzo");
	$bicicleta->acelerar(30);
	$bicicleta->datos();
?>
