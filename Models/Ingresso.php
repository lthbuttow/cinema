<?php
namespace Models;

use \Core\Model;

class Ingresso {
    
    private $gerarIngresso;
    private $consultarAssentoIngresso;
    private $consultarTipoIngresso;
    
    public function __construct() {
        
    }
    
    public function getGerarIngresso() {
        return $this->gerarIngresso;
    }

    public function getConsultarAssentoIngresso() {
        return $this->consultarAssentoIngresso;
    }

    public function getConsultarTipoIngresso() {
        return $this->consultarTipoIngresso;
    }

    public function setGerarIngresso($gerarIngresso) {
        $this->gerarIngresso = $gerarIngresso;
    }

    public function setConsultarAssentoIngresso($consultarAssentoIngresso) {
        $this->consultarAssentoIngresso = $consultarAssentoIngresso;
    }

    public function setConsultarTipoIngresso($consultarTipoIngresso) {
        $this->consultarTipoIngresso = $consultarTipoIngresso;
    }



    
}
