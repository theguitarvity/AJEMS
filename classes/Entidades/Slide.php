<?php

/**
 * Description of Slide
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Slide {
    //put your code here
    
    private $id_slide;
    private $nome_slide;
    private $caminho_slide;
    private $data_slide;
    
    
    function getId_slide() {
        return $this->id_slide;
    }

    function getNome_slide() {
        return $this->nome_slide;
    }

    function getCaminho_slide() {
        return $this->caminho_slide;
    }

    function getData_slide() {
        return $this->data_slide;
    }

    function setId_slide($id_slide) {
        $this->id_slide = $id_slide;
    }

    function setNome_slide($nome_slide) {
        $this->nome_slide = $nome_slide;
    }

    function setCaminho_slide($caminho_slide) {
        $this->caminho_slide = $caminho_slide;
    }

    function setData_slide($data_slide) {
        $this->data_slide = $data_slide;
    }


}
?>
