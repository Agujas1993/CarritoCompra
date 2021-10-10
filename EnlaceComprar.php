<?php

trait EnlaceComprar
{
	private function enlaceComprar()
	{
		return " <a href=\"?accion=comprar&producto=" . urlencode(serialize($this)) . "\">Comprar</a>";
	}
}





?>