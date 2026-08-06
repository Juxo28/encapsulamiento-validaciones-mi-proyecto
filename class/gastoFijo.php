<?php

class gastoFijo extends Gasto {
    private $periodicidad;

    public function __construct($id, $monto, $fecha, $descripcion, $metodoPago, $comprobante, $departamento, $categoria, $usuarioGasto, $periodicidad)
    {
       parent::__construct($id, $monto, $fecha, $descripcion, $metodoPago, $comprobante, $departamento, $categoria, $usuarioGasto);

        $this->periodicidad=$periodicidad;
    }

     public function mostrarInformacion()
    {
        parent::mostrarInformacion();

        echo "Periodicidad: ".$this->periodicidad."<br>";
        echo "Tipo: Gasto Fijo<br>";
    }
}