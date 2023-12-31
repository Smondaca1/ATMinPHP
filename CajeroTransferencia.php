<?php

require_once 'Cajero.php';

class CajeroTransferencia extends Cajero {
    public function transferir($monto, $cuentaDestino) {
        if ($monto <= $this->saldo && $cuentaDestino instanceof CajeroTransferencia) {
            $this->saldo -= $monto;
            $cuentaDestino->depositar($monto);
            return "Transferencia exitosa. Nuevo saldo: " . $this->saldo . "<br>";
        } else {
            return "No se puede realizar la transferencia. Saldo insuficiente o cuenta de destino no válida.<br>";
        }
    }

    public function depositar($monto) {
        $this->saldo += $monto;
        return "Depósito exitoso. Nuevo saldo: " . $this->saldo . "<br>";
    }
}
?>
