<?php
namespace Models;

use \Core\Model;

class Usuarios extends Model {

	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM filme";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
		$array = $sql->fetchAll();
		}

		return $array;
	}

}