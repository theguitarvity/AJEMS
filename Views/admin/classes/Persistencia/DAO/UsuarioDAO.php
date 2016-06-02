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
    function insert(Usuario $user) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuario(cpf,nome, empresa, dt_nasc, grupo_acesso, tel_cel, tel_fixo, email, end_usuario) VALUES(:cpf,:nome, :empresa,:dtNasc,:grupoAcesso, :tel, :cel, :email,:end)");
            $param = array(
                ":cpf" => $user->getCpfUsuario(),
                ":nome" => $user->getNomeUsuario(),
                ":empresa" => $user->getEmpresaUsuario(),
                ":dt" => $user->getDataNasc(),
                ":grupoAcesso" => $user->getIdGrupo(),
                ":tel" => $user->getTelFixo(),
                ":cel" => $user->getTelCel(),
                ":email" => $user->getEmailUsuario(),
                ":end" => $user->getIdEndereco()
            );
            return $stmt($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    function delete(Usuario $user){
        try{
            $stmt = $this->pdo->prepare("DELETE FROM usuario WHERE id_usuario=:id");
            $param = array(
                ":id"=>$user->getIdUsuario()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    function login($email,$senha){
        try {
            $stmt=$this->pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha=:senha ");
            $param = array(
                ":email"=>$email,
                ":senha"=>$senha
            );
            $stmt->execute($param);
            if($stmt->rowCount()>0){
                return true;
            }
            else{
                return false;
            }
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            
        }
    }
    function retornaID($email){
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
            $param = array(
                ":email"=>$email
            );
            $stmt->execute($param);
            if($stmt->rowCount()>0){
                $cons = $stmt->fetch(PDO::FETCH_ASSOC);
                return $cons['id_usuario'];
                
            }
            else{
                return "";
            }
            
            
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
