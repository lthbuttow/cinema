<?php

namespace Controllers;

use \Core\Controller;
use \Pdo\SessaoPDO;
use \Pdo\SalaPDO;

class SessaoController extends Controller {
    private $sessaoPDO;
    private $salaPDO;

    public function __construct() {
        $this->sessaoPDO = new SessaoPDO();
        $this->salaPDO = new SalaPDO();
    }
    public function index() {
        
        echo "\n\n Escolha um Filme!";        

    }
    
    public function selectSession($id) {
        
        $array = array();
        $array['sessoes'] = $this->sessaoPDO->selecionarSessao($id);
        
        $this->loadTemplate('sessaoHome', $array);
    }    
    
    public function consultaSala($id) {
        
       $array = array();
       $array['assentos'] = $this->salaPDO->consultarSala($id);
        
        $this->loadTemplate('salaAssento', $array);
    }      
    
//    public function inserir() {
//    $array = array();
//
//    if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
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
//    
//    }
//    
//    $this->loadTemplate('addFilme', $array);
//
//    }
//    
//    public function excluir($id) {
//    if(!empty($id)) {
//        
//        if($this->filmePDO->delete($id)){
//            header("Location: ".BASE_URL); 
//        }
//        
//    }
//         
//    echo 'errrrrrrrro';
//       
//    } 
//
//    public function editar($id) {
//    $array = array();
//    
//    $array['filme'] = $this->filmePDO->findById($id);
//
//        if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
//
//        $filmeUpdate = new Filme();
//        $titulo = $_POST['titulo'];
//        $duracao = $_POST['duracao'];
//        $filme_id = $id;
//        $filmeUpdate->setId($filme_id);
//        $filmeUpdate->setTitulo($titulo);
//        $filmeUpdate->setDuracao($duracao);
//
//        if($this->filmePDO->update($filmeUpdate)) {
//            $array['status'] = 'atualizado';
//            $array['filme'] = $this->filmePDO->findById($id);
//        }
//    }
//    
//        $this->loadTemplate('editaFilme', $array);
//
//    }    

}
