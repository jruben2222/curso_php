<?php
class Operaciones{
    public  $jj=0;

    public static function sumar($a, $b){
        return $a + $b;
    }

    public static function restar($a, $b){
        return $a - $b;
    }

    public static function multiplicar($a, $b){
        return $a * $b;
    }
    public static function dividir($a, $b){
        if ($b == 0) {
            return "Error: División por cero.";
        }
        return $a / $b;
    }

    public static function potencia($base, $exponente){
        return $base ** $exponente;
    }


}

$v=Operaciones::jj;
echo "Suma estática: " . $v . "\n";


$oper=new Operaciones();
echo "Atributo jj: " . $oper->jj . "\n";
echo "Suma: " . $oper->sumar(5, 3) . "\n";
echo "Resta: " . $oper->restar(5, 3) . "\n";
echo "Multiplicación: " . $oper->multiplicar(5, 3) . "\n";
echo "División: " . $oper->dividir(5, 0) . "\n";
echo "Potencia: " . $oper->potencia(5, 3) . "\n";


$oper2=new Operaciones();
echo "Suma: " . $oper2->sumar(10, 4) . "\n";
echo "Resta: " . $oper2->restar(10, 4) . "\n";
echo "Multiplicación: " . $oper2->multiplicar(10, 4) . "\n";
echo "División: " . $oper2->dividir(10, 2) . "\n";  


?>  