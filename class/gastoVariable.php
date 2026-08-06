<?php 

class GastoVariable extends Gasto {
    private $motivo;

    public function __construct($id, $monto, $fecha, $descripcion, $metodoPago, $comprobante, $departamento, $categoria, $usuarioGasto, $motivo)
    {
      parent::__construct($id, $monto, $fecha, $descripcion, $metodoPago, $comprobante, $departamento, $categoria, $usuarioGasto);
      $this->motivo=$motivo;
    }

    public function mostrarInformacion()
    {
        parent::mostrarInformacion();

        echo "Motivo: ".$this->motivo."<br>";
        echo "Tipo: Gasto Variable<br>";
    }
}