<?php
class Views{
    public function getView($ruta, $vista, $data="") {
       $vista = 'views/' . $vista . '.php';
       require $vista;
    }
}
?>
