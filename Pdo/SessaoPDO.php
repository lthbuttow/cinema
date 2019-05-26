<?php
namespace Pdo;

use \Core\Model;
use \Models\Sessao;

class SessaoPDO extends Model {

//    protected $db;
//   
//   public function __construct() {
//       $this->db = parent::__construct();
//  }   
    
    public function insert($filme){
        try{
            $stmt = $this->db->prepare("INSERT INTO filme (titulo, duracao) VALUES (?,?)");
            $stmt->bindValue(1, $filme->getTitulo());
            $stmt->bindValue(2, $filme->getDuracao());
            return $stmt->execute();
            
        } catch (PDOException $ex) {
            echo "\nExceção no insert da classe FilmePDO: " . $ex->getMessage();
            return false;
        }
        
    }
    public function findAll(){
       try{
            $stmt = $this->db->prepare("SELECT * FROM sessao, sessao_filme WHERE sessao.filme_id = sessao_filme.filme_id AND sessao_filme.filme_id = 4");
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
    public function findById($id){
       try{
            $stmt = $this->db->prepare("SELECT * FROM cinema.filme WHERE filme_id = ?");
            $stmt->bindValue(1, $id);
           if($stmt->execute()){
               
               $rs = $stmt->fetch(\PDO::FETCH_OBJ);
               $filme = [];
               
               array_push($filme, $this->resultSetToFilme($rs));
           

           }
            
            return $filme;
        
        } catch (PDOException $ex) {
            echo "\nExceção no findById da classe FilmePDO: " . $ex->getMessage();
       }      
        
    }    
    public function update($filme){
        try{
            $stmt = $this->db->prepare('UPDATE filme SET titulo = :titulo, duracao = :duracao WHERE filme_id = :id');
            $stmt->bindValue(":titulo", $filme->getTitulo());
            $stmt->bindValue(":duracao", $filme->getDuracao());
            $stmt->bindValue(":id", $filme->getId());
            return $stmt->execute();
            
        } catch (PDOException $ex) {
            echo "\nExceção no update da classe FilmePDO: " . $ex->getMessage();
        }        
    }    
    
    public function delete($id){
        try{
            $stmt = $this->db->prepare("DELETE FROM filme WHERE filme_id = ?");
            $stmt->bindValue(1, $id);
            return $stmt->execute();
            
        } catch (PDOException $ex) {
            echo "\nExceção no delete da classe FilmePDO: " . $ex->getMessage();
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
        $sessao->setSessaoEncerrada($resultado->SessaoEncerrada);
        
        
        return $sessao;
    }
    
}

