<?php

namespace Controllers;

use \Core\Controller;
use \Models\Filme;
use \Pdo\FilmePDO;

class FilmeController extends Controller {
    private $filmePDO;
    
    public function __construct() {
        $this->filmePDO = new FilmePDO();
    }
    public function index() {
        
        $array = array();
        $array['filmes'] = $this->filmePDO->findAll();
        
        $this->loadTemplate('filmeHome', $array);
    }
    
    public function inserir() {
    $array = array();

    if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
        
    $filme = new Filme();
    $titulo = $_POST['titulo'];
    $duracao = $_POST['duracao'];    
    $filme->setTitulo($titulo);
    $filme->setDuracao($duracao);

    if($this->filmePDO->insert($filme)) {
        $array['status'] = 'inserido';
    }
    
    }
    
    $this->loadTemplate('addFilme', $array);

    }
    
    public function excluir($id) {
    if(!empty($id)) {
        
        if($this->filmePDO->delete($id)){
            header("Location: ".BASE_URL); 
        }
        
    }
         
    echo 'errrrrrrrro';
       
    } 

    public function editar($id) {
    $array = array();

//    if (isset($_POST['titulo']) && !empty($_POST['titulo']));
//        
//    $filme = new Filme();
//    $titulo = $_POST['titulo'];
//    $duracao = $_POST['duracao'];    
//    $filme->setTitulo($titulo);
//    $filme->setDuracao($duracao);
//
//    if($this->filmePDO->insert($filme)) {
//        $array['status'] = 'inserido';
//    }
    
    
    
    $this->loadTemplate('editaFilme', $array);

    }    

}