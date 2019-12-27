<?php
    require_once("modelos/Productos_modelo.php");
    $producto = new Productos_modelos();
    $matrizProductos = $producto->get_productos();
    require_once("vista/Productos_view.php");
?>