<?php
// Obtener el nombre del servidor
$servidor = $_SERVER['HTTP_HOST'];

// Obtener la ruta completa del script
$ruta_script = $_SERVER['REQUEST_URI'];

// Concatenar el servidor con la ruta
$direccion_completa = $servidor . $ruta_script;

// Imprimir la dirección completa
echo "Dirección completa del script: " . $direccion_completa;
?>