<?php

/**
 * Description of Usuario
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
    class Senha{
        private $idUsuario;
        private $senha;
        
        function getIdUsuario() {
            return $this->idUsuario;
        }

        function getSenha() {
            return $this->senha;
        }

        function setIdUsuario($idUsuario) {
            $this->idUsuario = $idUsuario;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }


        
        
    }

?>
