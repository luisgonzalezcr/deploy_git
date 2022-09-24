<?php
class BaseController
{
  /*************Cargar Modelos************/
  public function Model($nameModel)
  {
    $file = dirname(__DIR__) . "/app/models/" . $nameModel . ".php";

    if (file_exists($file)) {
      $nameModel =  require_once $file;
    }
    return $file;
  }
  /*************Obtener el metodo HTTP************/
  protected static function getMethod()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
  /*************Obtener los Header************/
  protected static function getHeader(string $header)
  {
    $ContentType = getallheaders();
    return $ContentType[$header];
  }

  /*******Obtener los parametros enviados por PUT,POST,PATCH,DELETE******/
  protected static function getParam()
  {
    if (self::getHeader('Content-Type') == 'application/json') {
      $param = json_decode(file_get_contents("php://input"), true);
    } else {
      $param = $_POST;
    }
    return $param;
  }
}
