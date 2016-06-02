<?php

/**
 * Description of UsuarioDAO
 *
 * @copyright (c) 2016, ByteGod IT solutions - todos os direitos reservados
 */
require_once("ConnectionFactory.php");

class UsuarioDAO {

    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
    }

    //iniciando definição do CRUD
    function inserir(Usuario $user) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuario(cpf,nome, empresa, dt_nasc,grupo_acesso,tel_cel, tel_fixo, email, end_usuario, senha) VALUES(:cpf,:nome, :empresa,:dtNasc,:grupo,:tel, :cel, :email,:end,:senha)");
            $param = array(
                ":cpf" => $user->getCpfUsuario(),
                ":nome" => $user->getNomeUsuario(),
                ":empresa" => $user->getEmpresaUsuario(),
                ":dtNasc" => $user->getDataNasc(),
                ":grupo" => $user->getIdGrupo(),
                ":tel" => $user->getTelFixo(),
                ":cel" => $user->getTelCel(),
                ":email" => $user->getEmailUsuario(),
                ":end" => $user->getIdEndereco(),
                ":senha" => $user->getSenha()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage() . "<br  />";
            echo $ex->getLine() . "<br  />";
            echo $ex->getFile() . "<br  />";
            echo $ex->getCode();
        }
    }

    function delete(Usuario $user) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM usuario WHERE id_usuario=:id");
            $param = array(
                ":id" => $user->getIdUsuario()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function login($email, $senha) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha=:senha ");
            $param = array(
                ":email" => $email,
                ":senha" => $senha
            );
            $stmt->execute($param);
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function retornaID($email) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
            $param = array(
                ":email" => $email
            );
            $stmt->execute($param);
            if ($stmt->rowCount() > 0) {
                $cons = $stmt->fetch(PDO::FETCH_ASSOC);
                return $cons['id_usuario'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
