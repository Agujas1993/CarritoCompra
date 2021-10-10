<?php 
    spl_autoload_register(function($class){
        $file = $class . '.php';
        include $file;
    });
    session_start();
    $carrito = Carrito::getCarrito();
    $carrito->guardaEstadoCookie("carrito");
    session_destroy();
?>

<a href=".">Volver</a>