<?php
require_once 'CajeroTransferencia.php';
require_once 'CajeroRetiro.php';
$cajeroTransferencia = new CajeroTransferencia(800);
$cajeroRetiro = new CajeroRetiro(300);

echo $cajeroTransferencia->consultarSaldo();
echo $cajeroTransferencia->depositar(100);
echo $cajeroTransferencia->transferir(100, $cajeroRetiro);

echo $cajeroRetiro->consultarSaldo();
echo $cajeroRetiro->retirar(40);

echo $cajeroTransferencia->consultarSaldo();
echo $cajeroRetiro->consultarSaldo();