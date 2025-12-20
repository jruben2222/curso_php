<?php
require_once('./PersonasClass.php');
$persona1 = new Personas("Luis", 30, "Calle Falsa 123");
$persona2 = new Personas("Ana", 25, "Avenida Siempre Viva 742");
echo "Nombre: " . $persona1->getNombre() . ", Edad: " . $persona1->getEdad() . ", Dirección: " . $persona1->getDireccion() . "\n";
echo "Nombre: " . $persona2->getNombre() . ", Edad: " .
        $persona2->getEdad() . ", Dirección: " . $persona2->getDireccion() . "\n";
$persona1->setNombre("Luis Miguel");
echo "Nuevo Nombre de persona1: " . $persona1->getNombre() . "\n";
