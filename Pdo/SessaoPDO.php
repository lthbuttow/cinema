<?php
namespace Pdo;

use \Core\Model;
use \Models\Sessao;

class SessaoPDO extends Model {
 
    public function selecionarSessao($filme_id){
       try{
            $stmt = $this->db->prepare("SELECT * FROM sessao, sessao_filme WHERE sessao.filme_id = sessao_filme.filme_id AND sessao_filme.filme_id = ?");
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
            echo "\nExceção no SelecionarSessao da classe SessaoPDO: " . $ex->getMessage();
       }      
        
    }
    
    public function verificaLotacao($sessao){
       try{
            $stmt = $this->db->prepare("SELECT * FROM sessao WHERE sessao_id = ?");
            $stmt->bindValue(1, $sessao);
            $rs = $stmt->execute();
            $rs = $stmt->fetch(\PDO::FETCH_OBJ);
            
            $sala = $rs->sala_id;
            
            
            $stmt = $this->db->prepare("SELECT * FROM sala WHERE id_sala = ?");
            $stmt->bindValue(1, $sala);
            $rs = $stmt->execute();
            $rs = $stmt->fetch(\PDO::FETCH_OBJ);
            
            $capacidade = $rs->capacidade;
            
            $stmt = $this->db->prepare("SELECT count(ingresso_id) AS ingressos FROM ingresso WHERE sessao_id = ?");
            $stmt->bindValue(1, $sessao);
            $rs = $stmt->execute();
            $rs = $stmt->fetch(\PDO::FETCH_OBJ);
            
            $totalIngresso = $rs->ingressos;
            
            if($totalIngresso == $capacidade) {
            $stmt = $this->db->prepare("UPDATE sessao SET sessao_encerrada = 1 WHERE sessao_id = ?");
            $stmt->bindValue(1, $sessao);
            $rs = $stmt->execute();                
            }
           
        
        } catch (PDOException $ex) {
            echo "\nExceção no verificaLotacao da classe SessaoPDO: " . $ex->getMessage();
       }      
        
    }
    
    
    public function insert($sessao){
        try{
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("INSERT INTO sessao (data, hora, valor_inteiro, valor_meia, sessao_encerrada, filme_id, sala_id) VALUES (?,?,?,?,?,?,?)");
            $stmt->bindValue(1, $sessao->getDataSessao());
            $stmt->bindValue(2, $sessao->getHoraSessao());
            $stmt->bindValue(3, $sessao->getValorInteira());
            $stmt->bindValue(4, $sessao->getValorMeia());
            $stmt->bindValue(5, $sessao->getSessaoEncerrada());
            $stmt->bindValue(6, $sessao->getFilme());
            $stmt->bindValue(7, $sessao->getSala());
            if($stmt->execute()){
                $sessaoId = $this->db->lastInsertId();
                $stmt = $this->db->prepare("INSERT INTO sessao_filme (filme_id, sessao_id) VALUES (?,?)");
                $stmt->bindValue(1, $sessao->getFilme());
                $stmt->bindValue(2, $sessaoId);
                if($stmt->execute()){
                    $stmt = $this->db->prepare("INSERT INTO sessao_sala (id_sessao, id_sala) VALUES (?,?)");   
                    $stmt->bindValue(1, $sessaoId);
                    $stmt->bindValue(2, $sessao->getSala());
                    if(!$stmt->execute()){
                        throw PDOException;     
                    }
                } else {
                    throw PDOException;    
                }
                
                if($this->db->commit()){
                    return true;
                }    
                return false;                
              
            }            
        } catch (PDOException $ex) {
            echo "\nExceção no insert da classe SessaoPDO: " . $ex->getMessage();
            $this->db->rollBack();
            return false;
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

