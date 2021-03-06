<?php

class Producto implements iEnCarrito
{
    use MasMenos;
    use EnlaceComprar;
    private $nombre;
    private $precio;
    private $iva;

    public function __construct($nombre, $precio, $iva = 21)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;
    }
    public function mostrar()
    {
        return "<p><span>({$this->cantidad}x)</span>{$this->nombre}: {$this->precio} &euro; + {$this->iva}%</p>";
    }

    public function precio()
    {
        return $this->precio * $this->cantidad;
    }

    public function precioIva()
    {
        return round($this->precio * ($this->cantidad * (1 + $this->iva / 100)), 2);
    }

    public function permiteUnidades()
    {
        return true;
    }

    public function __toString()
    {
        $salida = '<br>' . $this->nombre . ' ' . $this->precio . ' &euro;';
       $salida .= $this->enlaceComprar();
        return $salida;
    }
}


?>