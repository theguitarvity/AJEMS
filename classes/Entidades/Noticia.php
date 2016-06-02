<?php

/**
 * Description of Noticia
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Noticia {
    private $idNoticia;
    private $idUsuario;
    private $tituloNoticia;
    private $resumoNoticia;
    private $descricaoNoticia;
    
    
    function getIdNoticia() {
        return $this->idNoticia;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getTituloNoticia() {
        return $this->tituloNoticia;
    }

    function getResumoNoticia() {
        return $this->resumoNoticia;
    }

    function getDescricaoNoticia() {
        return $this->descricaoNoticia;
    }

    function setIdNoticia($idNoticia) {
        $this->idNoticia = $idNoticia;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setTituloNoticia($tituloNoticia) {
        $this->tituloNoticia = $tituloNoticia;
    }

    function setResumoNoticia($resumoNoticia) {
        $this->resumoNoticia = $resumoNoticia;
    }

    function setDescricaoNoticia($descricaoNoticia) {
        $this->descricaoNoticia = $descricaoNoticia;
    }


    
    
    
}
