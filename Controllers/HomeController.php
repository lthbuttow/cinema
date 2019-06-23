<?php
namespace Controllers;

use \Core\Controller;
use \Models\Filme;

class HomeController extends Controller {

	public function index() {
		$array = array();

		$this->loadTemplate('home', $array);
	}

}