<?php


//Estructura de control


echo "Uso del if:<br/>";

$edad=10;
if($edad>=18){
    echo "Eres mayor de edad.<br/>";
}

echo 'Maria tiene '.$edad.' años.';

echo "<br/>";
echo "Uso del while:<br/>";

while($edad<18){
    echo " No eres mayor de edad.<br/>";
    $edad++; // $edad=$edad+1; $dad+=1;
}


echo "<br/>";
echo "Uso del for:<br/>";
//el for necesita una variable con un valor inicial, una condicion y un incremento

for($i=1;$i<=12;$i++){
    for( $a=1;$a<=12;$a++){
        $r=$a*$i;
        echo $a." x ".$i." = ".$r."<br/>";
    }
    
}

echo "<br/>";
echo "Uso del foreach:<br/>";
$colores=array("Rojo","Verde","Azul","Amarillo");
foreach($colores as $color){
    echo "El color es: ".$color."<br/>";
}



echo "<br/>";
echo "Uso del switch:<br/>";
$dia=3;
switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
        break;
}

