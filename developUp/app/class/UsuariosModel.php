<?php

include_once "Model.php";

class UsuariosModel extends Model
{
    protected $_table = "usuarios";

    public function lerUser ()
    {
        return $this->read();
    }

    public function newLogin (array $dados)
    {
        return $this->logar($dados);
    }
}//end UsuariosModel
