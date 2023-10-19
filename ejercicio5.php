<!-- Creación de una clase abstracta
Crear una clase abstracta "FiguraGeometrica" con el método abstracto "calcularArea". 
Crear dos clases "Cuadrado" y "Triángulo" que hereden de "FiguraGeometrica".
Implementar el método "calcularArea" en cada una de las clases hijas.-->

<?php

abstract class FiguraGeometrica {
    abstract public function calcularArea();
}

class Cuadrado extends FiguraGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Triangulo extends FiguraGeometrica {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return 0.5 * $this->base * $this->altura;
    }
}

$cuadrado = new Cuadrado(5);
$triangulo = new Triangulo(4, 6);

echo "Área del cuadrado: " . $cuadrado->calcularArea() . "<br>";
echo "Área del triángulo: " . $triangulo->calcularArea();