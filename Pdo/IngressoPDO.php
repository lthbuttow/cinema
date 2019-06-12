<?php

namespace Pdo;

use \Core\Model;
use \Models\Ingresso;
use \Models\Assento;

class IngressoPDO {

    public function consultarTipoIngresso($ticketType){    
        if ($ticketType == 0 || $ticketType == 1) {
            return true;
        }
        else {
            return false;
        }
    }        
}
