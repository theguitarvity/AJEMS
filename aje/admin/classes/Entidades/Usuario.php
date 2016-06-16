<?php

/**
 * Description of Usuario
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Usuario {
    private $idUsuario;
    private $idGrupo;
    private $idEndereco;
    private $nomeUsuario;
    private $emailUsuario;
    private $cpfUsuario;
    private $dataNasc;
    private $telFixo;
    private $telCel;
    private $empresaUsuario;
    private $senha;
    
    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

        
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdGrupo() {
        return $this->idGrupo;
    }

    function getIdEndereco() {
        return $this->idEndereco;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getEmailUsuario() {
        return $this->emailUsuario;
    }

    function getCpfUsuario() {
        return $this->cpfUsuario;
    }

    function getDataNasc() {
        return $this->dataNasc;
    }

    function getTelFixo() {
        return $this->telFixo;
    }

    function getTelCel() {
        return $this->telCel;
    }

    function getEmpresaUsuario() {
        return $this->empresaUsuario;
    }

    

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdGrupo($idGrupo) {
        $this->idGrupo = $idGrupo;
    }

    function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setEmailUsuario($emailUsuario) {
        $this->emailUsuario = $emailUsuario;
    }

    function setCpfUsuario($cpfUsuario) {
        $this->cpfUsuario = $cpfUsuario;
    }

    function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    function setTelFixo($telFixo) {
        $this->telFixo = $telFixo;
    }

    function setTelCel($telCel) {
        $this->telCel = $telCel;
    }

    function setEmpresaUsuario($empresaUsuario) {
        $this->empresaUsuario = $empresaUsuario;
    }



}
