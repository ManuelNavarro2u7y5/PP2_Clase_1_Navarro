<?php
// Definir variables
$nombre = "Juan";
$edad = 20;
$esEstudiante = true;

// Función creada por nosotros
function calcularDescuento($edad, $esEstudiante) {
    if ($esEstudiante) {
        return 0.20; // 20% de descuento para estudiantes
    } elseif ($edad > 65) {
        return 0.30; // 30% de descuento para mayores de 65 años
    } elseif ($edad < 18) {
        return 0.10; // 10% de descuento para menores de 18 años
    } else {
        return 0.0; // Sin descuento
    }
}

// Usar una función propia del lenguaje: number_format
$precioOriginal = 100; // Precio original del producto
$descuento = calcularDescuento($edad, $esEstudiante);
$precioFinal = $precioOriginal - ($precioOriginal * $descuento);
$precioFormateado = number_format($precioFinal, 2);

echo "Hola, $nombre. ";
if ($descuento > 0) {
    echo "Tienes un descuento del " . ($descuento * 100) . "%. ";
} else {
    echo "No tienes ningún descuento. ";
}
echo "El precio final del producto es $$precioFormateado.";
?>
