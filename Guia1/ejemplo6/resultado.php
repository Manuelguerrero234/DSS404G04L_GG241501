<?php
// Definir variables con datos personales
$nombre = "Juan Pérez";
$lugar_nacimiento = "San Salvador, El Salvador";
$edad = 25;
$carnet_universidad = "U20250001";

// Mostrar los datos en una tabla usando HERE DOCS
$tabla = <<<EOT
<table border="1">
    <tr>
        <th>Dato</th>
        <th>Información</th>
    </tr>
    <tr>
        <td>Nombre Completo</td>
        <td>$nombre</td>
    </tr>
    <tr>
        <td>Lugar de Nacimiento</td>
        <td>$lugar_nacimiento</td>
    </tr>
    <tr>
        <td>Edad</td>
        <td>$edad</td>
    </tr>
    <tr>
        <td>Carnet Universitario</td>
        <td>$carnet_universidad</td>
    </tr>
</table>
EOT;

// Imprimir la tabla
echo $tabla;
?>
