<?php

trait Persistir
{
	private $segundosPersistencia = 2592000;

	public function guardaEstadoCookie($cookie)
	{
		$tiempo = time()+$this->segundosPersistencia;
		setcookie($cookie, serialize($this), $tiempo);
	}

	public static function traeCookie($nombrecookie)
	{
		if(isset($_COOKIE[$nombrecookie])) {
			return unserialize($_COOKIE[$nombrecookie]);
		}
		return false;
	}
}


?>