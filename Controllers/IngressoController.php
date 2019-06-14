<?php

namespace Controllers;

use \Core\Controller;
use \Pdo\SessaoPDO;
use \Pdo\IngressoPDO;
use \Pdo\SalaPDO;
use \Models\Ingresso;

class IngressoController extends Controller {
    private $ingressoPDO;

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
            if($this->ingressoPDO->consultarAssentoIngresso($sessao, $cdIngresso)){
                echo 'ingresso ok';
            } else {
                $array['statusAssento'] = 'Assento Ocupado';
            }
        } else {
            $array['statusTipoIngresso'] = 'Tipo Inválido';
        }
        exit;

        }
    }      
}