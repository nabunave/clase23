<!-- Creación de una clase Trait
● Crear una clase "Color" con la propiedad "color".
● Crear dos clases "Automovil" y "Bicicleta" que utilicen el Trait "Color".
● Agregar métodos para imprimir los datos del automóvil y la bicicleta en
pantalla, incluyendo el color.-->

<?php

trait Color
{
    private $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function imprimirDatos()
    {
        echo "Color: " . $this->color;
    }
}

class Automovil
{
    use Color;
    public function imprimirDatosAutomovil()
    {
        echo "Este automóvil tiene el color: " . $this->getColor();
    }
}

class Bicicleta
{
    use Color;
    public function imprimirDatosBicicleta()
    {
        echo " Esta bicicleta tiene el color: " . $this->getColor();
    }
}

$auto = new Automovil();
$auto->setColor("Rojo");
$auto->imprimirDatosAutomovil();

$bici = new Bicicleta();
$bici->setColor("Verde");
$bici->imprimirDatosBicicleta();
