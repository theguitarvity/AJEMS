<?php

/**
 * Description of EnderecoDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
    require_once("../ConnectionFactory.php");
class EnderecoDAO {
    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
        
    }
    function inserir(Endereco $end){
        try {
            $stmt = $this->pdo->prepare("INSERT INTO endereco(rua, numero, complemento, bairro, cep, cidade, estado) VALUES(:rua,:numero,:complemento,:bairro,:cep, :cidade,:estado)");
            $param=array(
                ":rua" =>$end->getRuaEndereco(),
                ":numero"=>$end->getNumeroEndereco(),
                ":complemento"=>$end->getComplemento(),
                ":bairro"=>$end->getBairroEndereco(),
                ":cep"=>$end->getCepEndereco(),
                ":cidade"=>$end->getCidadeEndereco(),
                ":estado"=>$end->getEstadoEndereco()
            );
            return $stmt->execute($param);
            
        }
        catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    function delete(Endereco $end){
        try {
            
            $stmt = $this->pdo->prepare("DELETE from endereco WHERE id_endereco = :id");
            $param = array(
                ":id" =>$end->getIdEndereco()
            );
            return $stmt->execute($param);
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    function update(Endereco $end){
        try {
            $stmt = $this->pdo->prepare("UPDATE FROM endereco set rua=:rua, numero=:numero, complemento=:complemento, bairro=:bairro, cep=:cep, cidade = :cidade, estado=:estado WHERE id_endereco=:id");
            $param = array(
                ":id" =>$end->getIdEndereco(),
                ":rua"=>$end->getRuaEndereco(),
                ":numero"=>$end->getNumeroEndereco(),
                ":complemento"=>$end->getComplemento(),
                ":bairro"=>$end->getBairroEndereco(),
                ":cep"=>$end->getCepEndereco(),
                ":cidade"=>$end->getCidadeEndereco(),
                ":estado"=>$end->getEstadoEndereco()
            );
            return $stmt->execute($param);
            
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
