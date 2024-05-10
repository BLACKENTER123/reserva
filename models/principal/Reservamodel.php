<?php
class ReservaModel extends Query{
    
    public function __construct() {
        parent::__construct();
    }
   
    public function getDisponible($f_llegada, $f_salida, $cancha){
        return $this->selectAll("SELECT * FROM reservas 
        where fecha_ingreso <= '$f_salida' and fecha_salida >= '$f_llegada' and id_cancha = $cancha ");
    }

        //Recuperar las canchas
        public function getCanchas() {
            return $this->selectAll("SELECT * FROM canchas");
        }
    

    public function getReservaCancha($cancha){
        return $this->selectAll("SELECT * FROM reservas 
        where id_cancha = $cancha" );
    }

}
?>