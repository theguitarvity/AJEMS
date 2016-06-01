<?php

/**
 * Description of Evento
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Evento {
    private $idEvento;
    private $nomeEvento;
    private $endArquivo;
    private $paginaEvento;
    private $slideFiguras;
    
    function getIdEvento() {
        return $this->idEvento;
    }

    function getNomeEvento() {
        return $this->nomeEvento;
    }

    function getEndArquivo() {
        return $this->endArquivo;
    }

    function getPaginaEvento() {
        return $this->paginaEvento;
    }

    function getSlideFiguras() {
        return $this->slideFiguras;
    }

    function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }

    function setNomeEvento($nomeEvento) {
        $this->nomeEvento = $nomeEvento;
    }

    function setEndArquivo($endArquivo) {
        $this->endArquivo = $endArquivo;
    }

    function setPaginaEvento($paginaEvento) {
        $this->paginaEvento = $paginaEvento;
    }

    function setSlideFiguras($slideFiguras) {
        $this->slideFiguras = $slideFiguras;
    }


    
    
}
