<?php
class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }
  
    public function index() {
        $data = [];

        $this->views->getView('principal', 'principal/login', $data);
    }
}
?>
