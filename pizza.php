<?php

class pizza extends articulo{

    private $ingredientes;

    public function __construct($nombre, $coste, $precio, $contador, $ingredientes){
        parent::__construct($nombre, $coste, $precio, $contador);

        $this->ingredientes=$ingredientes;
    }
    public function getAlcoholica(){
        return $this->ingredientes;
    }
    public function setAlcoholica($ingredientes){
        $this->ingredientes=$ingredientes;
    }
}
?>