<?php

class Load {
    public function view($nombre_vista, $data = null) {
        
        include 'views/' . $nombre_vista;
    }
}

?>