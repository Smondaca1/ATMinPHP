<?php

class Cajero {
    protected $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function consultarSaldo() {
        return "Saldo actual: " . $this->saldo . "<br>";
    }
}
?>



