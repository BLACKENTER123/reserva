<?php
class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }
  
    public function index() {
        $data = [];

        $this->views->getView('principal', 'principal/login', $data);
    }

    public function verify() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Validar los campos requeridos
            if (validarCampos(['correo', 'clave'])) {
                $correo = strClean($_POST['correo']);
                $clave = strClean($_POST['clave']);

                //Verificar acceso del correo
                $verificarCorreo = $this->model->validarAcceso($correo);
                if (empty($verificarCorreo)) {
                    $res = ['tipo' => 'warning', 'msg' => 'El usuario no esta registrado'];
                } else {
                    if (password_verify($clave, $verificarCorreo['clave'])) {
                        //Crear sesion
                        $res = ['tipo' => 'success', 'msg' => 'Bienvenido'];
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'Contraseña incorrecta'];
                    }
                    
                }
                
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'Debes rellenar todos los campos requeridos'];
            }
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
?>
