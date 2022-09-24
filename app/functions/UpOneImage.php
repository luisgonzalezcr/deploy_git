<?php
class UpOneImage
{
  private static $cont = 0;


  private static $success;
  private static $err;


  static public function getSuccess()
  {
    return self::$success;
  }

  static public function getError()
  {
    return self::$err;
  }

  /*
   *
   * Verificar el tipo de imagen, extencion y tamano
   * @var array , el nombre de la imagen $_FILES['archivo']
   * @var string , la carpeta a guardar 
   * @var int $_width el ancho de la imagen
   * @var int $_height la altura de la imagen
   * @var int, el tamano que desea sbur ejem 2mb
  */
  static  public function imagem(array $imagem, string $carpeta, int $_width = null, int $_height = null, int $peso = null)
  {
    $filename = $imagem['name'];
    $ext = explode('.', $imagem['name']);
    $temporal = $imagem['tmp_name'];

    $peso = $peso ? $peso : 1; //1mb
    $ancho = $_width ? $_width : 800; //800px;
    $alto = $_height ? $_height : 600; //600px;

    try {
      if ($imagem['name']) {
        // JPG 
        if (preg_match('/jpg|JPG|jpeg|JPEG/', $ext[1])) {

          if ($imagem['size'] > $peso * (1024 * 1024)) {
            self::$err = "archivo demasiado grande";
            self::$success = false;
          } else {
            $tamano = getimagesize($temporal);
            $width = $tamano[0];
            $height = $tamano[1];
            $img_vieja = imagecreatefromjpeg($temporal);
            $img_nueva = imagecreatetruecolor($ancho, $alto);
            $renombrar = sha1($filename . time());
            $filenameRand = $renombrar . "." . $ext[1];

            $directorio = getcwd() . DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $carpeta;

            if (!file_exists($directorio)) {
              mkdir($directorio, 0777);
            }

            $ruta = $directorio . DIRECTORY_SEPARATOR . $filenameRand;
            // ruta publica
            $rutaPublic = DOMAIN . "/public/Images/" . $carpeta . "/" . $filenameRand;

            $dir = opendir($directorio);

            imagecopyresampled($img_nueva, $img_vieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
            imagejpeg($img_nueva, $ruta);
            closedir($dir);
          }


          // PNG
        } elseif (preg_match('/png|PNG/', $ext[1])) {
          if ($imagem['size'] > $peso * (1024 * 1024)) {
            self::$err = "archivo demasiado grande";
            self::$success = false;
          } else {
            $tamano = getimagesize($temporal);
            $width = $tamano[0];
            $height = $tamano[1];
            $img_vieja = imagecreatefrompng($temporal);
            $img_nueva = imagecreatetruecolor($ancho, $alto);
            $renombrar = sha1($filename . time());
            $filenameRand = $renombrar . "." . $ext[1];

            $directorio = getcwd() . DIRECTORY_SEPARATOR . 'Images' . DIRECTORY_SEPARATOR . $carpeta;


            if (!file_exists($directorio)) {
              mkdir($directorio, 0777);
            }

            $ruta = $directorio . "/" . $filenameRand;
            // ruta publica
            $rutaPublic = DOMAIN . "/public/Images/" . $carpeta . "/" . $filenameRand;
            
            $dir = opendir($directorio);

            imagecopyresampled($img_nueva, $img_vieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
            imagepng($img_nueva, $ruta);
            self::$success = "La imagen se agrego al servidor";
            closedir($dir);
          }
        } else {
          self::$err = "Formato no aceptado";
          self::$success = false;
        }
        return $data=[
          "name"=>$filenameRand,
          "ruta"=>$rutaPublic
        ];
      } else {
        self::$err = "No ha seleccionado ninguna imagen";
        self::$success = false;
      }
    } catch (Exception $ex) {
      self::$err = sprintf('error %s', $ex->getMessage());
    }
  }
}
