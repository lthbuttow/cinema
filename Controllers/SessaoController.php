<?php

namespace Controllers;

use \Core\Controller;
use \Pdo\SessaoPDO;
use \Pdo\SalaPDO;
use \Pdo\FilmePDO;
use Models\Sessao;

class SessaoController extends Controller {
    private $sessaoPDO;
    private $salaPDO;

    public function __construct() {
        $this->sessaoPDO = new SessaoPDO();
        $this->salaPDO = new SalaPDO();
        $this->filmePDO = new FilmePDO();
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

    public function selecionarFilme() {
        
       $array = array();
       $array['filmes'] = $this->filmePDO->findAll();
        
        $this->loadTemplate('addSessao', $array);
    }
    
    public function selecionarSala($filmeid) {
        
       $array = array();
       $array['filmeid'] = $filmeid;
       $array['salas'] = $this->salaPDO->findAll();
       
       $this->loadTemplate('addSessaoSala', $array);
    }
    
    public function add($salaid, $filmeid) {
        
       $array = array();
       $array['salaid'] = $salaid;
       $array['filmeid'] = $filmeid;
       $array['salas'] = $this->salaPDO->findAll();
       
       if (isset($_POST['data']) && !empty($_POST['data'])){

       $sessao = new Sessao();
       $data = $_POST['data'];
       $horario = $_POST['horario'];    
       $inteira = $_POST['inteira'];  
       $meia = $_POST['meia'];  
       $sessaoEncerrada = $_POST['sessao'];  
       $sessao->setDataSessao($data);
       $sessao->setHoraSessao($horario);
       $sessao->setValorInteira($inteira);
       $sessao->setValorMeia($meia);
       $sessao->setSessaoEncerrada($sessaoEncerrada);
       $sessao->setFilme($filmeid);
       $sessao->setSala($salaid);
       
       if($this->sessaoPDO->insert($sessao)) {
           $array['status'] = 'inserido';
       }

       }
       
       $this->loadTemplate('addSess', $array);
    }     
    

}
