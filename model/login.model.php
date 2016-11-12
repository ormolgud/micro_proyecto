<?php
  class LoginModel{
    private $pdo;

    public function __CONSTRUCT(){
      try{
        $this->pdo = DataBase::connect();
      }catch(Exception $e){
        die($e->getMessage());
      }
    }

    public function login($data){
      try{
        $sql = "SELECT * FROM usuario WHERE usu_nickName = '$data[0]' AND usu_clave = '$data[1]'";
        $query = $this->pdo->prepare($sql);
        $valid = $query->fetchAll();
          if ($valid["usu_nickName"] == $data[0] && $valid["usu_clave"] == $data[1]){
            $msn[0] = "user";
            $msn[1] = "index";
            $msn[2] = "Bienvenido ".$valid["usu_nickName"];
          }
          else{
            $msn[0] = "login";
            $msn[1] = "index";
            $msn[2] = "Usuario ".$data[0]." o contraseña inválidos";
          }
      }catch(Exception $e){
        $msn[0] = 'login';
        $msn[1] = 'index';
        $msn[2] = $e->getMessage();
      }
      return $msn;
    }

    public function registerNew($data){
      try{
        $sql = "INSERT INTO usuario (usu_nombre, usu_apellido, usu_telefono, usu_tipo_id,
           usu_identificacion, usu_email, usu_cumple, usu_nacionalidad, usu_estado,
            usu_rol_codigo, usu_autor_registro, usu_fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $query = $this->pdo->prepare($sql);
        $fecha = date("Y-m-d H:i:s");
        $recive = $query->execute(array($data['nom'], $data['apellido'], $data['tel'], $data['tipo_id'],
                              $data['id'], $data['email'], $data['cumple'], $data['pais'],
                              $data['estado'], 1 , $data['autor'], $fecha));

        var_dump($recive);


      }catch(Exception $captura){

      }
    }
  }
?>
