<?php

namespace Pdo;

use \Core\Model;
use \Models\Ingresso;
use \Models\Assento;

class IngressoPDO extends Model {

    public function consultarTipoIngresso($ticketType){    
        if ($ticketType == 0 || $ticketType == 1) {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function consultarAssentoIngresso($sessaoId, $cdIngresso) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM cinema.ingresso WHERE codigo_assento_ingresso = ? AND sessao_id = ?");
            $stmt->bindValue(1, $cdIngresso);
            $stmt->bindValue(2, $sessaoId);
            $rs = $stmt->execute();
            $rs = $stmt->fetch();
            
            if($rs){
               return true;
            } else {
               return false;  
            } 
            
                      
        } catch (PDOException $ex) {
            echo "\nExceção no consultarAssentoIngresso da classe IngressoPDO: " . $ex->getMessage();
        }
    }
}

//SELECT * FROM cinema.sala, cinema.sessao_sala, cinema.sala_assento WHERE sessao_sala.id_sala = sala.id_sala AND sala.id_sala = sala_assento.sala_id AND sessao_sala.id_sessao = 7 AND sala_assento.assento_id = 1

//query consultarAssentoIngresso
