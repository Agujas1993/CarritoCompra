<?php

class Pack implements iEnCarrito
{
    use EnlaceComprar;
    use MasMenos;

    private $productosPack;

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
    
    public function permiteUnidades()
    {
        return true;
    }


    public function __toString()
    {
        $salida = "<br>Pack: " . $this->precio() . " &euro;";
        $salida .= $this->enlaceComprar();
        return $salida;
    }

}

?>