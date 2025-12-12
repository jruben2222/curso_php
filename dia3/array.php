<?php
//Areglo o array: es una colección de datos o un conjunto de valores
$numeros = array(1,2,3,4,5); //Forma antigua
$frutas = ["Naranja", "Manzana", "Pera", "Uva"]; //Forma nueva
$datos = [1, "Hola", 3.4, true]; //Arreglo con diferentes tipos de datos
$personas = array(
    "Juan" => 25,
    "María" => 30,
    "Pedro" => 28
); //Arreglo asociativo
//Acceder a los elementos del arreglo
echo "Número en la posición 2: " . $numeros[2] . "<br>";
echo "Fruta en la posición 0: " . $frutas[0] . "<br>";
echo "Edad de María: " . $personas["María"] . "<br>";
//Recorrer un arreglo con un ciclo foreach  
echo "<h2>Frutas:</h2>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}   

//Agregar elementos a un arreglo
$frutas[] = "Mango"; //Agrega al final
array_push($numeros, 6); //Agrega al final
//Eliminar elementos de un arreglo
array_pop($numeros); //Elimina el último elemento   
unset($frutas[1]); //Elimina el elemento en la posición 1
//Contar elementos en un arreglo
echo "Cantidad de frutas: " . count($frutas) . "<br>";
//Arreglo multidimensional
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo "Elemento en fila 1, columna 2: " . $matriz[1][2] . "<br>";
//Recorrer arreglo multidimensional
echo "<h2>Matriz:</h2>";
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}   
