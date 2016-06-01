<?php

/**
 * Description of GrupoDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("../ConnectionFactory.php");

class GrupoDAO {

    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
    }

    function insert(Grupo $grupo) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO grupo_usuario(id_grupo,nome_grupo) VALUES(:id, :nome)");
            $param = array(
                ":id" => $grupo->getIdGrupo(),
                ":nome" => $grupo->getNomeGrupo()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function delete(Grupo $grupo) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM grupo_usuario WHERE id_grupo = :id");
            $param = array(
                ":id" => $grupo->getIdGrupo()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function update(Grupo $grupo) {
        try {
            $stmt = $this->pdo->prepare("UPDATE from grupo_usuario set nome_grupo=:nome WHERE id_grupo=:id ");
            $param = array(
                ":id" => $grupo->getIdGrupo(),
                ":nome" => $grupo->getNomeGrupo()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
