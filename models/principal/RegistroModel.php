<?php
class RegistroModel extends Query{
    
    public function __construct() {
        parent::__construct();
    }

    #Funcion para registrar usuarios
    public function registrarse($nombre, $apellido, $correo, $hash, $rol) {
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, clave, rol) VALUES (?,?,?,?,?)";
        return $this->insert($sql, [$nombre, $apellido, $correo, $hash,$rol]);
    }

    public function validarUnique($item, $valor, $id_usuario) {
        if ($id_usuario == 0) {
            $sql = "SELECT * FROM usuarios WHERE $item = '$valor'";
        } else {
            $sql = "SELECT * FROM usuarios WHERE $item = '$valor' AND id != $id_usuario";
        }
        return $this->select($sql);
    }
}
?>