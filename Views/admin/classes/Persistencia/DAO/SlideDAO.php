<?php

/**
 * Description of SlideDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("ConnectionFactory.php");

class SlideDAO {

    //put your code here
    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
    }

    function retornaNumero() {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM slide");
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function insert(Slide $slide) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO slide(nome_slide,caminho_slide, data) VALUES(:nome, :caminho, NOW())");
            $param = array(
                ":nome" => $slide->getNome_slide(),
                ":caminho" => $slide->getCaminho_slide()
                
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
