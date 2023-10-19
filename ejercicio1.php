<!-- Creación de una clase sencilla
● Crear una clase "Persona" con las propiedades "nombre", "edad" y "email".
● Agregar un método para imprimir los datos de la persona en pantalla.-->

<?php
class Persona
{
    private $nombre;
    private $edad;
    private $email;

    public function __construct($nombre, $edad, $email)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }

    public function getNombre()    {
        return $this->nombre;
    }

    public function setNombre($nombre)    {
        $this->nombre = $nombre;
    }

    public function getEdad()    {
        return $this->edad;
    }

    public function setEdad($edad)    {
        $this->edad = $edad;
    }

    public function getEmail()    {
        return $this->email;
    }

    public function setEmail($email)    {
        $this->email = $email;
    }

    public function imprimirDatos() {
        echo "La persona se llama " . $this->getNombre() . " tiene " . $this->getEdad() . " su e-mail es " . $this->getEmail();
        }
    }        

$persona = new Persona("Carlos", 25, "carlos@gmail.com");
$persona->imprimirDatos();

?>
