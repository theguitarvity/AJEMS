<?php

/**
 * Description of EventoDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("../ConnectionFactory.php");
class EventoDAO {
    //put your code here
    
    function __construct() {
        $this->conn = new ConnectionFactory;
        $this->dao = $this->conn->Connecr();
        
    }
    
    
    
    function insert(Evento $evento){
        try {
            $stmt = $this->pdo->prepare("INSERT INTO eventos()"); //continuar daqui
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
