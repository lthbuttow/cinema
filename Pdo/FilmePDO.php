<?php
namespace Pdo;

use \Core\Model;
use \Models\Filme;

class FilmePDO extends Model {
    
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
            $stmt = $this->db->prepare("SELECT * FROM cinema.filme ORDER BY titulo");
           if($stmt->execute()){
               
               $rs = $stmt->fetchAll(\PDO::FETCH_OBJ);
               $filmes = [];
               foreach ($rs as $resultado) {
                   array_push($filmes, $this->resultSetToFilme($resultado));
              }

           }
            
            return $filmes;
        
        } catch (PDOException $ex) {
            echo "\nExceção no findAll da classe FilmePDO: " . $ex->getMessage();
       }      
        
    }
    public function update($filme){
        try{
            $stmt = $this->conn->prepare('UPDATE filme SET titulo = :titulo, duracao = :duracao WHERE filme_id = :id');
            $stmt->bindValue(":titulo", $filme->getTitulo());
            $stmt->bindValue(":duracao", $filme->getDuracao());
            $stmt->bindValue(":id", $filme->getId());
            if ($stmt->execute()){ 	
                echo "Filme atualizado com sucesso";
            }
        } catch (PDOException $ex) {
            echo "\nExceção no update da classe FilmePDO: " . $ex->getMessage();
        }        
    }    
    
    public function delete(){
        
    }
    
    private function resultSetToFilme($resultado){
        $filme = new Filme();
        $filme->setId($resultado->filme_id);
        $filme->setTitulo($resultado->titulo);
        $filme->setDuracao($resultado->duracao);
        
        return $filme;
    }
    
}
