<?php
class Registro extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [];

        $this->views->getView('principal', 'principal/registro', $data);
    }

    //Funcion para crear un usuario
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Validar los campos requeridos
            if (validarCampos(['nombre', 'apellido', 'correo', 'clave', 'confirmar'])) {
                $nombre = strClean($_POST['nombre']);
                $apellido = strClean($_POST['apellido']);
                $correo = strClean($_POST['correo']);
                $clave = strClean($_POST['clave']);
                $confirmar = strClean($_POST['confirmar']);
                $hash = password_hash($clave, PASSWORD_DEFAULT);
                $rol = 2;

                //Verificar si la contraseña es igual a la confirmacion de contraseña
                if ($clave == $confirmar) {
                    // Verificar el UNIQUE
                    $verificarCorreo = $this->model->validarUnique('correo', $correo, 0);
                    if (empty($verificarCorreo)) {
                        $data = $this->model->registrarse($nombre, $apellido, $correo, $hash, $rol);
                        if (isset($_POST['condiciones']) && $_POST['condiciones'] == 'on') {
                            if ($data > 0) {
                                $res = ['tipo' => 'success', 'msg' => 'Usuario Registrado'];
                            } else {
                                $res = ['tipo' => 'warning', 'msg' => 'Hubo un error al Registrarse'];
                            }
                        } else {
                            $res = ['tipo' => 'warning', 'msg' => 'Debes aceptar los terminos y condiciones'];
                        }
                    } else {
                        $res = ['tipo' => 'warning', 'msg' => 'El correo ya existe'];
                    }
                } else {
                    $res = ['tipo' => 'warning', 'msg' => 'Las contraseñas con coinciden'];
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'Debes rellenar todos los campos requeridos'];
            }
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
