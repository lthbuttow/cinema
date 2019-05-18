<?php
namespace Controllers;

use \Core\Controller;
use \Models\Filme;

class HomeController extends Controller {

	public function index() {
		$array = array();


//		$usuarios = new Usuarios();
//		$array['lista'] = $usuarios->getAll();

		$this->loadTemplate('home', $array);
	}

}