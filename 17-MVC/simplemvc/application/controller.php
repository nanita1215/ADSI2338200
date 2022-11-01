<?php

class Controller {
    public $load;
    public $model;


    public function __construct(){
        $this->load = new Load();
        $this->model = new Model();
        $this->welcome();
    }
    function inicio() {
        $data = $this->model->infoUsuario();
        $this->load->view('welcome.php', $data);
    }
    private function welcome() {
        if ($_GET){
            if ($_GET['method']=='show') {
                $this->show();
            }
        } else {
            $data = $this->model->listUsers();
            $this->load->view('welcome.php', $data);
        }
    }
    function show(){
        $id = $_GET['id'];
        $data = $this->model->showUsers($id);
        $this->load->view('show.php', $data);

    }
}




