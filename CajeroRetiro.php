<?php

require_once 'Cajero.php';

class CajeroRetiro extends Cajero {
    public function retirar($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            return "Retiro exitoso. Nuevo saldo: " . $this->saldo . "<br>";
        } else {
            return "Saldo insuficiente para realizar el retiro.<br>";
        }
    }
}
?>
