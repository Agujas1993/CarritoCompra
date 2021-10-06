<?php

class Pack implements iEnCarrito
{
    private $productosPack;
    private $cantidad = 1;

    public function __construct($productosPack)
    {
        $this->productosPack = $productosPack;
    }

    public function mostrar()
    {
        $salida = '<div class="pack">';
        
        foreach($this->productosPack as $producto) {
            $salida .= $producto->mostrar();
            $salida .='<br>';
        }
        
        
        $salida .= '</div>';
        return $salida;
    }
    public function precio()
    {
        $total = 0;
        
        foreach($this->productosPack as $producto) {
            $total += $producto->precio();
        }
        return $total * $this->cantidad;
    }

    public function precioIva()
    {
        $total = 0;
        
        foreach($this->productosPack as $producto) {
            $total += $producto->precioIva();
        }
        return $total * $this->cantidad;
    }
    public function masUnidad($unidades = 1)
    {
        $this->cantidad += $unidades;
    }
    public function menosUnidad()
    {
        if($this->cantidad > 0){
            $this->cantidad--;
        }
    }
    public function permiteUnidades()
    {
        return true;
    }
}

?>