<?php

class Model extends DataBase {
    public function infoUsuario(){
        return array(
        'nombre' => 'Jeremias',
        'apellido' => 'Sprindfield'
        );
    }

    public function ListUsers(){
        return mysqli_query($this->conx,"SELECT * FROM users");
    }

    public function showUsers($id){
        return mysqli_query($this->conx,"SELECT * FROM users WHERE id = $id");
    }

    // end class 
}

