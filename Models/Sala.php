<?php
namespace Models;

use \Core\Model;

class Sala {
    
    private $numeroSala;
    private $capacidadeSala;
    private $assento;
    
    public function __construct() {
        
    }
    
    public function getNumeroSala() {
        return $this->numeroSala;
    }

    public function getCapacidadeSala() {
        return $this->capacidadeSala;
    }

    public function getAssento() {
        return $this->assento;
    }

    public function setNumeroSala($numeroSala) {
        $this->numeroSala = $numeroSala;
    }

    public function setCapacidadeSala($capacidadeSala) {
        $this->capacidadeSala = $capacidadeSala;
    }

    public function setAssento($assento) {
        $this->assento = $assento;
    }
    
    
}


