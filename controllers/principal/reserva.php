<?php
class Reserva extends Controller{
    public function __construct() {
        parent::__construct();
    }
  
    
    public function verify() {
        // Verificar si los parámetros están presentes
        if (isset($_GET['f_llegada'], $_GET['f_salida'], $_GET['Canchas'])) {
            // Limpiar los parámetros
            $f_llegada = strClean($_GET['f_llegada']);
            $f_salida = strClean($_GET['f_salida']);
            $cancha = strClean($_GET['Canchas']);
            $data['canchas'] =$this->model->getCanchas();

            // Verificar si los parámetros están vacíos
            if (!empty($f_llegada) && !empty($f_salida) && !empty($cancha)) {
                // Obtener los datos disponibles
                $data['reserva']= $this->model->getDisponible($f_llegada, $f_salida, $cancha);
                $data['disponible'] = [
                    'f_llegada' => $f_llegada,
                    'f_salida' => $f_salida,
                    'cancha' => $cancha];            
                $this->views->getView('principal', 'principal/reserva',$data
                
            );
            } else {
                // Redirigir si los parámetros están vacíos
                header('Location: ' . RUTA_PRINCIPAL . '?respuesta=warning');
            }
        }
    }
    
    public function listar($parametros){
        $array = explode(',', $parametros);
        $f_llegada = (!empty($array[0])) ? $array[0] : null;
        $f_salida = (!empty($array[1])) ? $array[1] : null;
        $cancha = (!empty($array[2])) ? $array[2] : null;
        
        if ($f_llegada != null && $f_salida != null && $cancha != null) {
            $canchasreservas = $this->model->getReservaCancha($cancha);
            $results = [];
            foreach ($canchasreservas as $reserva) {
                $datos['id'] = $reserva['id'];
                $datos['title'] = 'Ocupado';
                $datos['start'] = $reserva['fecha_ingreso'] ?? null; // Usar '2024-03-10' si es nulo
                $datos['end'] = $reserva['fecha_salida'];
                $datos['color'] = '#FF0000';
                $results[] = $datos;
            }
            echo json_encode($results, JSON_UNESCAPED_UNICODE);
        } else {
            // Manejo de error si faltan parámetros
            echo json_encode(['error' => 'Faltan parámetros'], JSON_UNESCAPED_UNICODE);
        }
        die(); 
    }
    
    
    
}
?>