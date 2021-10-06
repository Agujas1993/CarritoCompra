<?php

class Carrito
{
    private $productos = [];

    public function meter($producto)
    {
        $this->productos[] = $producto;
    }

    public function mostrar()
    {
        $total = 0;
        $totalIva = 0;
        echo '<div class="carrito">';

        foreach($this->productos as $prod){
            echo '<article class="lineacarrito">';
            echo $prod->mostrar();
            echo '</article>';

            $total += $prod->precio();
            $totalIva += $prod->precioIva();
        }
        echo '<div class="totalcarrito">TOTAL: ' . $total .' (' . $totalIva . ' IVA Incluido)</div>';


        echo '</div>';
    }

    public function quitar($indice)
    {
        unset($this->productos[$indice]);
    }

    public function masUnidad($indice)
    {
        $this->productos[$indice]->masUnidad();
    }

    public function menosUnidad($indice)
    {
        $this->productos[$indice]->menosUnidad();
    }
}


?>