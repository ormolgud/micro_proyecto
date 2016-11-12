<?php
class DataBase{

private static $db_host = "localhost";
private static $db_name = "dbcaballeros";
private static $db_user = "root";
private static $db_pass = "root";

private static $cont    = null;

public static function connect(){
    if(null == self::$cont){

      try{
        self::$cont = new PDO("mysql:host=".self::$db_host.";"."dbname=".self::$db_name, self::$db_user, self::$db_pass);
        self::$cont->exec("SET CHARACTER SET utf8");

      }catch(PDOException $e){
        die($e->getMessage());
      }

    }

    return self::$cont;
  }

  # Creamos la funcion para desconectarnos de la base de datos
  public static function disconnect(){
    self::$cont = null;
  }

}
?>
