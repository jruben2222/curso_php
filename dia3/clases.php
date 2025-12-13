<?php


class Persona {
    //Atributos
    private $nombre;
    public $edad;

    //Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //Métodos
    public function saludar() {
        return "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
    }

    public function cumplirAnios() {
        $this->edad += 1;
    }

    public function suma($a, $b) {
        return $a + $b;
    }

}   
$p1=new Persona("Luis", 28);
echo $p1->nombre . "\n"; //Acceder al atributo nombre
echo $p1->suma(10,11) . "\n"; //Llamar al método saludar

class Estudiantes extends   Persona {
    public $curso;

    public function __construct($nombre, $edad, $curso) {
        parent::__construct($nombre, $edad); //Llamar al constructor de la clase padre
        
        $this->curso = $curso;
    }

    public function estudiar() {
        return $this->nombre . " está estudiando " . $this->curso . ".";
    }
}

$e1 = new Estudiantes("María", 22, "PHP");
echo $e1->nombre . "\n"; //Llamar al método hered


abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function hacerSonido(); //Método abstracto
    public function getNombre() {
        return $this->nombre;
    }
}
class Perro extends Animal {
    public function hacerSonido() {
        return "Guau Guau";
    }
}
$perro = new Perro("Firulais");
echo $perro->getNombre() . " dice " . $perro->hacerSonido() . "\n";

echo sqrt(16) . "\n"; //Función matemática para raíz cuadrada