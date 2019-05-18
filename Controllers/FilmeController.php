<?php

namespace Controllers;

use \Core\Controller;
use \Models\Filme;
use \Pdo\FilmePDO;

//$filmePDO = new FilmePDO();
////print_r($filmePDO->findAll());
//
//
////insert
////$filme = new Filme();
////$filme-> setTitulo('Miranha 2');
////$filme-> setDuracao('01:45:00');
////
////$filmePDO->insert($filme);
//
////update
//$filme = new Filme();
//$filme-> setTitulo('Miranha 3');
//$filme-> setDuracao('02:45:00');
//$filme-> setId('2');
//
//$filmePDO->update($filme);
//
//print_r($filmePDO->findAll());
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

    $filme = new Filme();
    $titulo = addslashes($_POST['titulo']);
    $duracao = addslashes($_POST['duracao']);    
    $filme->setTitulo($titulo);
    $filme->setDuracao($duracao);

    $filmePDO = new FilmePDO();
    $filmePDO->insert($filme);
    header("Location: ".BASE_URL);

    }
    
    public function teste() {
        
        print_r($this->filmePDO->findAll());
//        $rs->findAll();
        


    }    

}