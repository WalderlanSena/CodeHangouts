<?php

include_once "Conexao.php";

class Model extends Conexao
{
    protected $_table = "";

    protected function read ()
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->_table}");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }//end read

    protected function logar (array $dados)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->_table} WHERE email = ? AND senha = ?");
        $stmt->bindValue(1, $dados['login']);
        $stmt->bindValue(2, $dados['senha']);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO_OBJ);
            header("Location: ../views/admin.php");
        } else {
            header("Location: ../../index.php");
        }
    }

}//end Model
