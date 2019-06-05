<?php
namespace Pdo;

use \Core\Model;
use \Models\Sessao;

class SessaoPDO extends Model {
 
    public function selecionarSessao($filme_id){
       try{
            $stmt = $this->db->prepare("SELECT * FROM sessao, sessao_filme WHERE sessao.filme_id = sessao_filme.filme_id AND sessao_filme.filme_id = ? AND sessao.sessao_encerrada = 0");
            $stmt->bindValue(1, $filme_id);
           if($stmt->execute()){
               
               $rs = $stmt->fetchAll(\PDO::FETCH_OBJ);
               $sessoes = [];
               foreach ($rs as $resultado) {
                   array_push($sessoes, $this->resultSetToSessao($resultado));
              }

           }
            
            return $sessoes;
        
        } catch (PDOException $ex) {
            echo "\nExceção no findAll da classe SessaoPDO: " . $ex->getMessage();
       }      
        
    }   
    
    private function resultSetToSessao($resultado){
        $sessao = new Sessao();
        $sessao->setId($resultado->sessao_id);
        $sessao->setDataSessao($resultado->data);
        $sessao->setHoraSessao($resultado->hora);
        $sessao->setValorInteira($resultado->valor_inteiro);
        $sessao->setValorMeia($resultado->valor_meia);
        $sessao->setSessaoEncerrada($resultado->sessao_encerrada);
        $sessao->setFilme($resultado->filme_id);
        
        
        return $sessao;
    }
    
}

