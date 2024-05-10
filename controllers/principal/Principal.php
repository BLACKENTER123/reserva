<?php
class Principal extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        //Traer Sliders
        $data['sliders'] =$this->model->getSliders();
        //Traer las canchas 
        $data['canchas'] =$this->model->getCanchas();

        $this->views->getView('principal', 'index', $data);
    }

    
}
?>
