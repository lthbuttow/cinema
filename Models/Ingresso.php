<?php
namespace Models;

use \Core\Model;

class Ingresso {
    
    private $codigoAssentoIngresso;
    private $tipoIngresso;
    
    public function __construct() {
        
    }
    
    public function getCodigoAssentoIngresso() {
        return $this->codigoAssentoIngresso;
    }

    public function getTipoIngresso() {
        return $this->tipoIngresso;
    }

    public function setCodigoAssentoIngresso($codigoAssentoIngresso) {
        $this->codigoAssentoIngresso = $codigoAssentoIngresso;
    }

    public function setTipoIngresso($tipoIngresso) {
        $this->tipoIngresso = $tipoIngresso;
    }
    
}
