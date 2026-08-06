<?php

require_once "../class/Gasto.php";
require_once "../class/gastoFijo.php";
require_once "../class/gastoVariable.php";

echo "<h2>Gasto Fijo</h2>";

$gastoFijo = new GastoFijo(
    1,
    1200000,
    "06/08/2026",
    "Arriendo de la oficina",
    "Transferencia",
    "Factura001.pdf",
    "Administración",
    "Infraestructura",
    "Julian",
    "Mensual"
);

$gastoFijo->mostrarInformacion();



echo "<h2>Gasto Variable</h2>";

$gastoVariable = new gastoVariable(
    2,
    350000,
    "06/08/2026",
    "Reparación de impresora",
    "Efectivo",
    "Factura002.pdf",
    "Sistemas",
    "Mantenimiento",
    "Julian",
    "Daño inesperado en el rodillo de impresión"
);

$gastoVariable->mostrarInformacion();