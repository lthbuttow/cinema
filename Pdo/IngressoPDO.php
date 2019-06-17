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
    
    public function gerarIngresso($sessaoId, $cdIngresso, $type) {
        try {
            $stmt = $this->db->prepare("INSERT INTO ingresso (codigo_assento_ingresso, tipo, sessao_id) VALUES (?,?,?)");
            $stmt->bindValue(1, $cdIngresso);
            $stmt->bindValue(2, $type);
            $stmt->bindValue(3, $sessaoId);
            
            if($stmt->execute()){
               return true;
            } else {
               return false;  
            } 
            
                      
        } catch (PDOException $ex) {
            echo "\nExceção no gerarIngresso da classe IngressoPDO: " . $ex->getMessage();
        }
    }    
}


