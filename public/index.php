<?php

require_once "../class/Gasto.php";

$usuario1 = new Gasto(
    2,
    100000,
    "03/08/2026",
    "Se hizo una transacción para comprar implementos de oficina",
    "Nequi",
    "comprobante_compra_oficina_03082026.pdf",
    "Caldas",
    "Miscelania",
    "Julian Palacio"
);

$usuario1->setId(1);
$usuario1->setMonto(-500);
$usuario1->setMetodoPago("Bancolombia");
$usuario1->setUsuarioGasto("David Latorre");



$usuario1->mostrarInformacion();

?>