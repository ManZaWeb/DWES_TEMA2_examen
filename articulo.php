<?php

class articulo {

    private $nombre;
    private $coste;

    private $precio;

    private $contador;

    public function __construct($nombre, $coste, $precio, $contador){

        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->contador = $contador;
    }
public function getNombre() {
    return $this->nombre;
}

public function setNombre($nombre) {
    $this->nombre = $nombre;
}

public function getCoste() {
    return $this->coste;
}

public function setCoste($coste) {
    $this->coste = $coste;
}
public function getPrecio() {
    return $this->precio;
}
public function setPrecio($precio) {
    $this->precio = $precio;
}
public function getcontador() {
    return $this->contador;
}
public function setContador($contador) {
    $this->contador = $contador;
}

public function __toString() {
    return "Nombre: {$this->nombre}<br>Coste: {$this->coste}<br>Precio: {$this->precio}<br>Contador: {$this->contador}";
}

}
?>