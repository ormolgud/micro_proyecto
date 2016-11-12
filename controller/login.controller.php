<?php
  require_once 'model/login.model.php';

  class LoginController{
    private $model;

    public function __CONSTRUCT(){
      $this->model = new LoginModel();
    }

    public function index(){
      $title = 'login';
	  require_once 'views/include/header.php';
      require_once 'views/login/login.php';
	  require_once 'views/include/footer.php';
    }

	public function register(){
    $title = 'registrarse';
	  require_once 'views/include/header.php';
      require_once 'views/login/register.php';
	  require_once 'views/include/footer.php';
    }

    public function registerNew(){
      $data = $_POST;
      $result = $this->model->registerNew($data);
      var_dump($result);
      exit();
      header("location:index.php?controller=$result[0]&action=$result[1]&msn=$result[2]");
    }


  }
?>
