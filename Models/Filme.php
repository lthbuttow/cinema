<?php
namespace Models;

use \Core\Model;

class Filme {

    private $filme_id;
    private $titulo;
    private $duracao;

    public function __construct() {
        
    }

    public function getId() {
        return $this->filme_id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDuracao() {
        return $this->duracao;
    }

    public function setId($id) {
        $this->filme_id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    
    public function __toString() {
        return "\nFilme[filme_id=$this->filme_id, Titulo=$this->titulo, Duracao=$this->duracao";
    }

}
