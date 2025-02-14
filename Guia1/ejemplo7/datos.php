<?php
// Definir variables con datos personales
$nombre = "Juan Pérez";
$lugar_nacimiento = "San Salvador, El Salvador";
$edad = 25;
$carnet_universidad = "U20250001";

// Generar el código HTML con echo
echo "<html>";
echo "<head><title>Datos Personales</title></head>";
echo "<body>";
echo "<table border='1'>";
echo "<tr><th>Dato</th><th>Información</th></tr>";
echo "<tr><td>Nombre Completo</td><td>$nombre</td></tr>";
echo "<tr><td>Lugar de Nacimiento</td><td>$lugar_nacimiento</td></tr>";
echo "<tr><td>Edad</td><td>$edad</td></tr>";
echo "<tr><td>Carnet Universitario</td><td>$carnet_universidad</td></tr>";
echo "</table>";
echo "</body>";
echo "</html>";
?>
