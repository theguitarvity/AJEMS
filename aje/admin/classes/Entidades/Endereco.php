<?php

/**
 * Description of Endereco
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Endereco {

    private $idEndereco;
    private $ruaEndereco;
    private $numeroEndereco;
    private $bairroEndereco;
    private $cidadeEndereco;
    private $estadoEndereco;
    private $cepEndereco;
    private $complemento;
    private $cpfUser;
    
    function getCpfUser() {
        return $this->cpfUser;
    }

    function setCpfUser($cpfUser) {
        $this->cpfUser = $cpfUser;
    }

        
    function getComplemento() {
        return $this->complemento;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

        
    
    function getIdEndereco() {
        return $this->idEndereco;
    }

    function getRuaEndereco() {
        return $this->ruaEndereco;
    }

    function getNumeroEndereco() {
        return $this->numeroEndereco;
    }

    function getBairroEndereco() {
        return $this->bairroEndereco;
    }

    function getCidadeEndereco() {
        return $this->cidadeEndereco;
    }

    function getEstadoEndereco() {
        return $this->estadoEndereco;
    }

    function getCepEndereco() {
        return $this->cepEndereco;
    }

    function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    function setRuaEndereco($ruaEndereco) {
        $this->ruaEndereco = $ruaEndereco;
    }

    function setNumeroEndereco($numeroEndereco) {
        $this->numeroEndereco = $numeroEndereco;
    }

    function setBairroEndereco($bairroEndereco) {
        $this->bairroEndereco = $bairroEndereco;
    }

    function setCidadeEndereco($cidadeEndereco) {
        $this->cidadeEndereco = $cidadeEndereco;
    }

    function setEstadoEndereco($estadoEndereco) {
        $this->estadoEndereco = $estadoEndereco;
    }

    function setCepEndereco($cepEndereco) {
        $this->cepEndereco = $cepEndereco;
    }



}

?>