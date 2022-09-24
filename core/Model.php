
<?php
class Model extends Database
{
  /**
   * Metodo estatico limpiar o sanetizar $_POST antes de enviarlo a la BD 
   * @array $data
   *
   */
  static public function limpiarSql($data)
  {
    $sanetizado = [];
    foreach ($data as $key => $value) {
      $sanetizado[$key] = addslashes(trim(rtrim($value)));
    }
    return $sanetizado;
  }
  /**
   * Metodo estatico para enviar consultas a cada select convirtiendolo en objeto el array
   * @var void
   *
   */
  public static function consultarSQL($query)
  {

    $resultado = Database::query($query);
    // $array = [];

    // while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
    //   $array[] = $registro;
    // }

    // $resultado->closeCursor();

    return $resultado;
  }
  /**
   * Consulta Plana de SQL (Utilizar cuando los métodos del modelo no son suficientes)
   * @string stmt sentencia sql,
   *
   */
  public static function SQL($query)
  {
    $resultado = self::consultarSQL($query);
    return $resultado;
  }
  /**
   * Metodo estatico listar todos los registros
   * @string table, 
   *
   */

  public static function all($tabla)
  {
    $query     = "SELECT * FROM " . $tabla;
    $resultado = self::consultarSQL($query);
    return $resultado;
  }
  /**
   * Obtener Registros con cierta cantidad
   * @string table, 
   * @array data 
   *
   */
  public static function limit($tabla, $limite)
  {
    $query = "SELECT * FROM " . $tabla . " LIMIT ${limite}";
    return self::consultarSQL($query);
    // return array_shift($resultado);
  }
  /**
   * Metodo estatico listar un registro por su id
   * @string table, 
   * @array data
   * @string columna
   * @int post id
   */
  public static function findId($tabla, $colId, $id)
  {
    $query     = "SELECT * FROM " . $tabla . " WHERE $colId = $id";
    $resultado = self::consultarSQL($query);
    return array_shift($resultado);
  }
  /**
   * Metodo estatico para saber si existe un registro
   * @string table, 
   * @array data
   * @string columna
   * @int post id
   */

  public static function exists(string $table, string $column, $value)
  {
    try {
      $sql = "SELECT COUNT(*) FROM $table WHERE $column= ?";
      $query = Database::query($sql,array($value));

      $res = ($query == 0) ? false : true;
      return $res;

    } catch (\PDOException $e) {
      error_log('Crud::exists -> ' . $e);
      die('Error interno del servidor');
    }
  }



  /**
   * Busca un registro por su id
   * @string table,
   * @string columna
   * @string valor 
   *
   */
  public static function where($tabla, $columna, $valor)
  {
    $query = "SELECT * FROM " . $tabla  . " WHERE ${columna} = '${valor}'";
    $resultado = self::consultarSQL($query);
    return array_shift($resultado);
  }

  /*
   * Guardar registro
   * @string table, 
   * @array data
   */
  static public function save($table, $data)
  {

    $columns = "(";
    $params = "(";

    foreach ($data as $key => $value) {

      $columns .= $key . ",";
      $params .= ":" . $key . ",";
    }

    $columns = substr($columns, 0, -1);
    $params = substr($params, 0, -1);

    $columns .= ")";
    $params .= ")";

    $sql = 'INSERT INTO $table $columns VALUES $params';
    // $stmt = $link->prepare("INSERT INTO $table $columns VALUES $params");
    $query = Database::query($sql);

    foreach ($data as $key => $value) {

      $query->bindParam(":" . $key, $data[$key], PDO::PARAM_STR);
    }

    if ($query->execute()) {

      $return = array(

        "lastId" => $query->lastInsertId(),
        // "lastId" => $link->lastInsertId(),
        // "msg" => "Registro guardado correctamente"

      );

      return $return;
    } else {

      return Database::errorDB();
    }
  }
  /*
   * Actualizar registro
   * @string table,
   * @array data
   * @string columna
   * @int post id
   */
  static public function update($table, $data, $colName, $id,)
  {

    $set = "";

    foreach ($data as $key => $value) {

      $set .= $key . " = :" . $key . ",";
    }

    $set = substr($set, 0, -1);
    $sql = "UPDATE $table SET $set WHERE $colName = :$colName";
   
    $query = Database::query($sql);

    foreach ($data as $key => $value) {

      $query->bindParam(":" . $key, $data[$key], PDO::PARAM_STR);
    }

    $query->bindParam(":" . $colName, $id, PDO::PARAM_INT);

    if ($query->execute()) {

      $return = array(

        "msg" => "Registro actualizado correctamente"

      );
      return $return;
    } else {

      return Database::errorDB();
    }
  }
  /*
   * eliminar registro
   * @string table nombre de la tabla ,
   * @string colName nombre de columna de la bd
   * @int post id que le enviamos para eliminar
   */
  static public function delete($table, $colName, $id,)
  {
    $sql = "DELETE FROM $table WHERE $colName = :$colName";
   
    $query = Database::query($sql);

    $query->bindParam(":" . $colName, $id, PDO::PARAM_INT);

    if ($query->execute()) {

      // $return = array(

      //   "msg" => "Registro eliminado correctamente"

      // );
      // return $return;
      return true;
    } else {

      return Database::errorDB();
    }
  }
}
