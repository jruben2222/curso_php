<?php
//create variables
$a="home";
//create arrays
$b=['page', 'about', 'contact'];
//associative arrays
$c=['first'=>'John', 'last'=>'Doe'];

//concatenation
//. // el operador de concatenacion en php

//print variables and arrays
echo "This is the ".$a." page. ";//variables primitivas
echo "Navigate to ".$b[1]." for more info. ";   //arrays
echo "Home page ".$c['last']    ; //associative arrays

//operadores matematicos
$a=10;
$b=5;
$c=$a+$b;
echo "The sum of ".$a." and ".$b." is ".$c.".";
$sum=5+10;
$sub=10-5;
$mul=5*10;
$div=10/2;
$pow=2**3;

echo "Sum: ".$sum." Subtraction: ".$sub." Multiplication: ".$mul." Division: ".$div." Power: ".$pow;

//Extrucuturas de control
$age=20;
if($age>=18){ //prueba logica o prueba de condicion.
    echo "You are an adult.";   //codigo a ejecutar si la condicion es verdadera
}elseif($age==18){
    echo "You just became an adult.";
}elseif($age<0){
    echo "Invalid age.";        
}else{
    echo "You are a minor.";  //codigo a ejecutar si la condicion es falsa
}


/*
PRACTICA 1:
Crear un programa  que indique si una varia es menor que 30, si lo es, mostrar un mensaje indicando que es menor que 30,
si es mayor a 40, inciar que es mayor a 40, y si no, indicar que esta entre 30 y 40.
*/

?>
<br>
<a href="formulario.php">Formulario</a><br/>