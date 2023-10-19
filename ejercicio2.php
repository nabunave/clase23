<!-- Herencia
● Crear una clase "Empleado" que herede de "Persona".
● Agregar la propiedad "puesto" a la clase "Empleado".
● Agregar un método para imprimir los datos del empleado en pantalla.-->

<?php

require_once('ejercicio1.php');

class Empleado extends Persona
{
    private $puesto;

    public function __construct($nombre, $edad, $email, $puesto)
    {
        parent::__construct($nombre, $edad, $email);
        $this->puesto = $puesto;
    }

    public function getPuesto()    {
        return $this->puesto;
    }

    public function setPuesto($puesto)    {
        $this->puesto = $puesto;
    }

    public function imprimirDatos()
    {
        parent::imprimirDatos();
        echo "La persona se llama " . $this->getNombre() . " tiene " . $this->getEdad() . " su e-mail es " . $this->getEmail() . " su puesto es " . $this->getPuesto();
    }
}

$empleado = new Empleado("Carlos", 25, "carlos@gmail.com", "recepcionista");
$empleado->imprimirDatos();
