<?php

class Conexao
{
    private $host   = "localhost";
    private $dbname = "developBase";
    private $user   = "root";
    private $pass   = "12345";
    protected $db   = null;

    public function __construct()
    {
        $this->db = $this->init();
    }//end construct

    private function init()
    {
        try {
            $conect = new PDO("mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->pass");
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit(1);
        }
        return $conect;
    }//end init

}//end class
