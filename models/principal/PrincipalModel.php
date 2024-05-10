<?php
class PrincipalModel extends Query{
    
    public function __construct() {
        parent::__construct();
    }
    //Recuperar sliders fotos
    public function getSliders() {
        return $this->selectAll("SELECT * FROM sliders");
    }
    //Recuperar las canchas
    public function getCanchas() {
        return $this->selectAll("SELECT * FROM canchas");
    }

}
?>