<?php

class Personas{
    private $nombre;
    private $edad;
    private $direccion;

    public function __construct($nombre, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getDireccion() {
        return $this->direccion;
    }
}