<?php
namespace Models;

use \Core\Model;

class Ingresso {
    
    private $codigoAssentoIngresso;
    private $tipoIngresso;
    private $ingressoSessao;


    public function __construct() {
        
    }
    
    public function getCodigoAssentoIngresso() {
        return $this->codigoAssentoIngresso;
    }

    public function getTipoIngresso() {
        return $this->tipoIngresso;
    }
    
    public function getIngressoSessao() {
        return $this->ingressoSessao;
    } 

    public function setCodigoAssentoIngresso($codigoAssentoIngresso) {
        $this->codigoAssentoIngresso = $codigoAssentoIngresso;
    }

    public function setTipoIngresso($tipoIngresso) {
        $this->tipoIngresso = $tipoIngresso;
    }
    
    public function setIngressoSessao($sessao) {
        $this->ingressoSessao = $sessao;
    }      
}
