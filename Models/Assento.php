<?php
namespace Models;

use \Core\Model;

class Assento {
    
    private $codigoAssento;
    
    public function __construct() {
        
    }
    
    public function getCodigoAssento() {
        return $this->codigoAssento;
    }

    public function setCodigoAssento($codigoAssento) {
        $this->codigoAssento = $codigoAssento;
    }

    
}
