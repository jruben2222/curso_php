<?php
//a las funciones se les puede pasar parámetros y devolver valores
function sumar(int $a, int $b): int {
    $r=0;
    try {
        $r=$a + $b;
    } catch (TypeError $e) {
        echo "Error de tipo: " . $e->getMessage() . "\n";
    }
    return $r;
}

function restar($a=10, $b=3) {
    return $a - $b;
}



function cambiarNombre() {
//    global $nombre; //usar variable global dentro de la función
    $nombre = "Ana";
}   

$nombre = "Carlos" ;

//cambiarNombre(); //llamar a la función para cambiar el nombre

echo "Hola, " . $nombre . "\n";
echo "Suma de 5 y 3: " . sumar('r', 3) . "\n";
echo "Resta de 5 y 3: " . restar(5, 3) . "\n";
echo "Resta de nada: " . restar() . "\n";

$a= 5**2; // operador de potencia en PHP
echo "5 al cuadrado es: " . $a . "\n";
