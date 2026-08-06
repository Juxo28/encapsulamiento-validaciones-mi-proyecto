<?php


class Gasto
{
    private $id;
    private $monto;
    private $fecha;
    private $descripcion;
    private $metodoPago;
    private $comprobante;
    private $departamento;
    private $categoria;
    private $usuarioGasto;


    public function __construct($id, $monto, $fecha, $descripcion, $metodoPago, $comprobante, $departamento, $categoria, $usuarioGasto)
    {
        $this->id = $id;
        $this->monto = $monto;
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
        $this->metodoPago = $metodoPago;
        $this->comprobante = $comprobante;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->usuarioGasto = $usuarioGasto;
    }

    public function setId($id)
    {
        if (is_numeric($id) && $id > 0) {
            $this->id = $id;
        }
    }

    public function setMonto($monto)
    {
        if (is_numeric($monto) && $monto > 0) {
            $this->monto = $monto;
        }else {
        echo "El monto debe ser mayor que 0.<br>";
    }

    }

    public function setFecha($fecha)
    {
        if (is_string($fecha) && trim($fecha) !== "") {
            $this->fecha = $fecha;
        }
    }

    public function setDescripcion($descripcion)
    {
        if (is_string($descripcion) && trim($descripcion) !== "") {
            $this->descripcion = $descripcion;
        }
    }

    public function setMetodoPago($metodoPago)
    {
        if (is_string($metodoPago) && trim($metodoPago) !== "") {
            $this->metodoPago = $metodoPago;
        }
    }

    public function setComprobante($comprobante)
    {
        if (is_string($comprobante) && trim($comprobante) !== "") {
            $this->comprobante = $comprobante;
        }
    }

    public function setDepartamento($departamento)
    {
        if (is_string($departamento) && trim($departamento) !== "") {
            $this->departamento = $departamento;
        }
    }

    public function setCategoria($categoria)
    {
        if (is_string($categoria) && trim($categoria) !== "") {
            $this->categoria = $categoria;
        }
    }

    public function setUsuarioGasto($usuarioGasto)
    {
        if (is_string($usuarioGasto) && trim($usuarioGasto) !== "") {
            $this->usuarioGasto = $usuarioGasto;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getMetodoPago()
    {
        return $this->metodoPago;
    }

    public function getComprobante()
    {
        return $this->comprobante;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getUsuarioGasto()
    {
        return $this->usuarioGasto;
    }


    public function mostrarInformacion()
{
    echo "ID: " . $this->id . "<br>";
    echo "Monto: $" . $this->monto . "<br>";
    echo "Fecha: " . $this->fecha . "<br>";
    echo "Descripción: " . $this->descripcion . "<br>";
    echo "Método de pago: " . $this->metodoPago . "<br>";
    echo "Comprobante: " . $this->comprobante . "<br>";
    echo "Departamento: " . $this->departamento . "<br>";
    echo "Categoría: " . $this->categoria . "<br>";
    echo "Usuario: " . $this->usuarioGasto . "<br>";
}
}
