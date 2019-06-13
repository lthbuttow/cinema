<?php

namespace Controllers;

use \Core\Controller;
use \Pdo\SessaoPDO;
use \Pdo\IngressoPDO;
use \Pdo\SalaPDO;
use Models\Ingresso;

class IngressoController {
    private $IngressoPDO;

    public function __construct() {
        $this->ingressoPDO = new IngressoPDO();
    }
    public function index() {
        
        echo "\n\n Escolha um Ingresso!";        

    }
    
    public function selectTipo($idAssento, $idSessao) {
        
        $array = array();
        $array['tipo'] = $this->ingressoPDO->selecionarTipoIngresso($id);
        
        $this->loadTemplate('ingressoTipo', $array);
    }
    
    public function reservarIngresso() {
        
        $array = array();
        
        if (isset($_POST['assentoId'])){
        
        $cdIngresso = $_POST['assentoId'];
        $sessao = $_POST['sessaoId'];
        $type = $_POST['ticketType'];
        
        if($this->ingressoPDO->consultarTipoIngresso($type)){
            if($this->IngressoPDO->consultarAssentoIngresso($sessao, $cdIngresso)){
                
            }
        } else {
            $array['statusTipoIngresso'] = 'Tipo Inválido';
        }
        exit;
                
//        $ingresso = new Ingresso();
//        $ingresso->setCodigoAssentoIngresso($cdIngresso);
//        $ingresso->setIngressoSessao($sessao);
//        $ingresso->setTipoIngresso($type);
        

//        if($this->filmePDO->insert($filme)) {
//            $array['status'] = 'inserido';
//        }

        }
    }      
}
