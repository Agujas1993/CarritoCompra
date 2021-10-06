<?php

class Producto
{
    private $nombre;
    private $precio;
    private $iva;
    private $cantidad = 1;

    public function __construct($nombre, $precio, $iva = 21)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;
    }
    public function mostrar()
    {
        return "<p>{$this->nombre}: {$this->precio} &euro; + {$this->iva}%</p>";
    }

    public function precio()
    {
        return $this->precio;
    }

    public function precioIva()
    {
        return round($this->precio + ($this->precio * ($this->iva / 100)), 2);
    }
}


?>