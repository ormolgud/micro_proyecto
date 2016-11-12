<?php
class UserModel{
	private $pdo;

	public function __CONSTRUCT()	{
		try{
      $this->pdo = DataBase::connect();
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

  public function createuser($data){
		try{
        $sql = "SELECT * FROM rol WHERE rol_nombre = '$data[0]'";
        $query = $this->pdo->prepare($sql);
        $valid = $query->execute();
        $result = $query->fetchAll();
        if (count($result) == 0 && $valid == 1){
          $sql = "INSERT INTO rol (rol_nombre, rol_descripcion, rol_estado, rol_autor_registro, rol_fecha_registro) VALUES (?,?,?,?,?);";
          $query = $this->pdo->prepare($sql);
          $rol_fecha_registro = date("Y-m-d H:i:s");
          $query->execute(array($data[0], $data[1], $data[2], $data[3], $rol_fecha_registro));//execute devuelve Verdadero o Falso
          $msn = "<div id='succes'>El rol ".$data[0]." se ha guardado con éxito.</div>";
        }
        else{
          $msn = "<div class = error><p>Rol existente: ".$data[0]."</p>";
          $msn = $msn."<table class='error'><tr><th>Nombre Rol</th><th>Descripción</th><th>Estado</th><th>Autor Registro</th><th>Fecha Registro</th></tr>";
          foreach ($result as $row) {
            if ($row["rol_estado"] == 1){
              $state = "Activo";
            }else{
              $state = "Inactivo";
            }
            $msn = $msn."<tr><td>".$row["rol_nombre"]."</td><td>".$row["rol_descripcion"]."</td><td>".$state."</td><td>".$row["rol_autor_registro"]."</td><td>".$row["rol_fecha_registro"]."</td></tr>";
          }
          $msn = $msn."</table></div>";
        }
				DataBase::disconnet();
      }catch(Exception $e){
        $msn = $e->getMessage();
      }
//      $this->pdo = DataBase::disconnet();
      return $msn;
    }

  //   try{
  //     $sql = "INSERT INTO usuarios VALUES (?,?,?,?)";
  //     $query = $this->pdo->prepare($sql);
	//
  //     $query->execute(array($data[0],$data[1],$data[2],$data[3]));
  //     $msn = "Guardo con exito";
  //     }catch (Exception $e){
  //       $msn = $e->getMessage();
  //   }
  //   return $msn;
  // }


  public function readuser(){
    try{
      $sql = "SELECT * FROM usuarios";
      $query = $this->pdo->prepare($sql);
      $query->execute();
      $result = $query->fetchALL(PDO::FETCH_BOTH);

      return $result;
      }catch (Exception $e){
        echo $e->getMessage();
        die();
    }
  }

}

?>
