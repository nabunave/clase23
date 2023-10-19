<!-- Abstracción y encapsulamiento
● Crear una clase "CuentaBancaria" con las propiedades "saldo" y "numeroCueznta". 
● Agregar métodos para depositar y retirar dinero de la cuenta bancaria.
● Utilizar setters y getters para acceder a las propiedades "saldo" y "numeroCuenta" de forma segura. -->

<?php

class CuentaBancaria {
    private $saldo;
    private $numeroCuenta;

    public function __construct($numeroCuenta, $saldoInicial = 0) {
        $this->numeroCuenta = $numeroCuenta;
        $this->saldo = $saldoInicial;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            echo "Ha depositado $monto Saldo actual: " . $this->getSaldo();
        } else {
            echo "El monto del depósito es incorrecto.";
        }
    }

    public function retirar($monto) {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Retiro de $monto realizado. Saldo actual: " . $this->getSaldo();
        } else {
            echo "Monto no válido.";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setNumeroCuenta($numeroCuenta) {
        $this->numeroCuenta = $numeroCuenta;
    }

    public function getNumeroCuenta() {
        return $this->numeroCuenta;
    }
}

$cuenta = new CuentaBancaria("48635184", 579);
$cuenta->depositar(800);
$cuenta->retirar(400);

echo "Número de cuenta: " . $cuenta->getNumeroCuenta() . "<br>";
echo "Saldo actual: " . $cuenta->getSaldo();
