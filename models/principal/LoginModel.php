<?php
class LoginModel extends Query
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validarAcceso($correo)
    {
        $sql = "SELECT * FROM usuarios WHERE estado = 1 AND correo = '$correo'";
        return $this->select($sql);
    }
}
