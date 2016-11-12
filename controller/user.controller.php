<?php
require_once 'model/user.model.php';

class UserController{

    private $model;

    public function __CONSTRUCT(){
        $this->model  = new UserModel();
    }

    // CREAMOS EL METODO INDEX O PORTADA DE LA SECCION FORMANDO UN LAYOUT
    public function index(){
      require_once 'views/include/header.php';
        require_once 'views/mod_user/index.php';
      require_once 'views/include/footer.php';
    }

    public function addNew(){
      require_once 'views/include/header.php';
        require_once 'views/mod_user/user.add.php';
      require_once 'views/include/footer.php';
    }

    public function create(){
        $data = $_POST["data"];
        $result = $this->model->createuser($data);
        header("location:index.php?controller=user&action=index&msn=$result");
    }

}
?>
