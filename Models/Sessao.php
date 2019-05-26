<?php
namespace Models;

use \Core\Model;

class Sessao {
    
    private $sessao_id;
    private $dataSessao;
    private $horaSessao;
    private $valorInteira;
    private $valorMeia;
    private $SessaoEncerrada;
    private $filme;
    private $ingresso;
    private $sala;


    public function __construct() {
        
    }

    public function getId() {
        return $this->sessao_id;
    }    
    
    public function getDataSessao() {
        return $this->dataSessao;
    }

    public function getHoraSessao() {
        return $this->horaSessao;
    }

    public function getValorInteira() {
        return $this->valorInteira;
    }

    public function getValorMeia() {
        return $this->valorMeia;
    }

    public function getSessaoEncerrada() {
        return $this->SessaoEncerrada;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function getIngresso() {
        return $this->ingresso;
    }

    public function getSala() {
        return $this->sala;
    }
    
    public function setId($id) {
        $this->sessao_id = $id;
    }    

    public function setDataSessao($dataSessao) {
        $this->dataSessao = $dataSessao;
    }

    public function setHoraSessao($horaSessao) {
        $this->horaSessao = $horaSessao;
    }

    public function setValorInteira($valorInteira) {
        $this->valorInteira = $valorInteira;
    }

    public function setValorMeia($valorMeia) {
        $this->valorMeia = $valorMeia;
    }

    public function setSessaoEncerrada($SessaoEncerrada) {
        $this->SessaoEncerrada = $SessaoEncerrada;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

    public function setIngresso($ingresso) {
        $this->ingresso = $ingresso;
    }

    public function setSala($sala) {
        $this->sala = $sala;
    }
    
}
