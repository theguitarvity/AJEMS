<?php

/**
 * Description of Grupo
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Grupo {
    private $idGrupo;
    private $nomeGrupo;
    
    function getIdGrupo() {
        return $this->idGrupo;
    }

    function getNomeGrupo() {
        return $this->nomeGrupo;
    }

    function setIdGrupo($idGrupo) {
        $this->idGrupo = $idGrupo;
    }

    function setNomeGrupo($nomeGrupo) {
        $this->nomeGrupo = $nomeGrupo;
    }


    
}
