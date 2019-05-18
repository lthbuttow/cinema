<?php
namespace Models;

use \Core\Model;

class Usuarios extends Model {
    public $conn;

    public function __construct() {
        $this->conn = parent::__construct();
    }

    public function getAll() {
            $array = array();

            $sql = "SELECT * FROM filme";
            $sql = $this->conn->query($sql);

            if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
            }

            return $array;
    }

}