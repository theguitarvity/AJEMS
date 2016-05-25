<?php

/**
 * Description of ConnectionFactory.php
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class ConnectionFactory {

    //criação de atributos da classe
    private $user;
    private $pass;
    private $host;
    private $base;
    private $file;
    public $pdo;

    //método responsável por abrir uma conexão com o banco de dados 


    function connect() {
        try {
            //atribuindo os valores de acesso ao servidor nos atributos da classe
            $this->user = "root";
            $this->pass = "";
            $this->host = "localhost";
            $this->base = "ajems";

            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"); //definindo os parametros de conexão no padrão utf-8
            $this->file = "mysql:host=" . $this->host . ";dbname:" . $this->base;
            $this->pdo = new PDO($this->file, $this->user, $this->pass);


            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);

            if(!$this->pdo){
               echo "Erro de Conexão";
            } 
            else {
                return $this->pdo;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}

?>
