<?php

namespace Pdo;

use \Core\Model;
use Models\Ingresso;
use \Models\Assento;

class IngressoPDO {

    public function consultarTipoIngresso($id){
       try{
            $stmt = $this->db->prepare("SELECT * FROM cinema.sala, cinema.sessao_sala, cinema.sala_assento WHERE sessao_sala.id_sala = sala.id_sala AND sala.id_sala = sala_assento.sala_id AND sessao_sala.id_sessao = ? ");
            $stmt->bindValue(1, $id);
            
           if($stmt->execute()){
               
               $rs = $stmt->fetchAll(\PDO::FETCH_OBJ);
               $salas = [];
               foreach ($rs as $resultado) {
                   array_push($salas, $this->resultSetToSala($resultado));
              }
           }            
            
            return $salas;
        
        } catch (PDOException $ex) {
            echo "\nExceção no consultarTipoIngresso da classe IngressoPDO: " . $ex->getMessage();
       }      
        
    }        
}
