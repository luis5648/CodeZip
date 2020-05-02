<?php
class Seguridad
{

    private $usuario = null;

    function __construct()
    {
        session_start();
        if (isset($_SESSION["usuario"])) {
            $this->usuario =  $_SESSION["usuario"];
        }
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function addUsuario($usuario)
    {
        $_SESSION["usuario"] = $usuario;
        $this->usuario = $usuario;
    }
}
