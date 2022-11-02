<!-- 

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
} -->

<?php 

class Model extends DataBase {
       public function listUsers() {
              return mysqli_query($this->conx, "SELECT * FROM users");
       }
       public function showUser($id) {
              return mysqli_query($this->conx, "SELECT * FROM users WHERE id = $id");
       }
       public function addUser() {
        $names     = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email     = $_POST['email'];
        $password  = md5($_POST['password']);
        $path      = "public/imgs/";
        $photo     = $path.time().".".pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
              return mysqli_query($this->conx, "INSERT INTO users VALUES (DEFAULT, '$names', '$birthdate', '$email', '$photo',  DEFAULT, '$password', DEFAULT)");
       }
       public function updUser() {
              $id        = $_POST['id'];
              $names     = $_POST['names'];
        $birthdate = $_POST['birthdate'];
        $email     = $_POST['email'];
        if(!empty($_FILES['photo']['name'])) {
              $path      = "public/imgs/";
              $photo     = $path.time().".".pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
              move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

              return mysqli_query($this->conx, "UPDATE users SET names = '$names', birthdate = '$birthdate', email = '$email', photo = '$photo' WHERE id = $id");
              } else {
                     return mysqli_query($this->conx, "UPDATE users SET names = '$names', birthdate = '$birthdate', email = '$email' WHERE id = $id");
              }
       }
       public function deleteUser($id) {
              return mysqli_query($this->conx, "DELETE FROM users WHERE id = $id");
       }
}

