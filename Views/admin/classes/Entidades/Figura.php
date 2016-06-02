<?php

/**
 * Description of Figura
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Figura {
    private $idFigura;
    private $endFigura;
    
    
    function getIdFigura() {
        return $this->idFigura;
    }

    function getEndFigura() {
        return $this->endFigura;
    }

    function setIdFigura($idFigura) {
        $this->idFigura = $idFigura;
    }

    function setEndFigura($endFigura) {
        $this->endFigura = $endFigura;
    }


}
