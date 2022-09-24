<?php

class Helpers
{
  public static function include($template, $data = [])
  {
    //setiaandolo a llave y valor con el foreach
    foreach ($data as $key => $value) {
      $$key = $value; //$$ significa variable de variable como le vamos a pasar muchos datos no hay forma de que sepamos que nombre van a tener esas variables manteniendo el nombre y no perder el valor
    }

    $file = dirname(__DIR__) . "/views/inc/" . $template . ".php";

    if (file_exists($file)) {
      require_once $file;
    }
  }

  public static function URL_APP()
  {
    return dirname(__DIR__);
  }

  /**
   *
   * Funcion de BreadCrumb
   * @title = titulo de la pagina enviamos la varible dinamica
   * @url = url del boton nuevo
   * @filterAll = filtrar todos por default vacio
   * @filterPublicado = filtrar publicados por default vacio
   * @filterPendiente = filtrar pendientes por default vacio
   *
   */



  public static function breadcrumbUrl($title, $name_button, $url = '', $filterAll = '', $filterPublicado = '', $filterPendiente = '')
  {
    echo '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5">' . $title . '</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      
      <div class="btn-group me-2">
        <a href="' . $url . '" type="button" class="btn btn-sm btn-outline-secondary">' . $name_button . '</a>
      </div>
      <div class="dropdown">

      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-filter" aria-hidden="true"></i>
        Filtro
      </button>

      <ul id="dark_dropdown" class="dropdown-menu">
        <li><a class="dropdown-item" href="' . $filterAll . '">Todos</a></li>
        <li><a class="dropdown-item" href="' . $filterPublicado . '">Publicado</a></li>
        <li><a class="dropdown-item" href="' . $filterPendiente . '">Pendiente</a></li>

      </ul>

</div>
  
    </div>
  </div>';
  }

  /**
   * Genera un menú dinámico con base a los links pasados
   *
   * @param array $links
   * @param string $active
   * @return void
   */
  public static function breadcrumbTitle($title, $name_button, $url)
  {
    $output = '';
    $output .= '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  
    <h1 class="h5">' . $title . '</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="' . $url . '" type="button" class="btn btn-sm btn-outline-secondary">' . $name_button . '</a>
      </div>
    </div>
  </div>
  ';

    return $output;
  }

  /**
   * Regresa la fecha de estos momentos
   *
   * @return string
   */
  public static function now()
  {
    return date('Y-m-d H:i:s');
  }


  /*
	Limitar / Cortar una cadena en PHP y agregarle
	puntos suspensivos si es necesario
	@author parzibyte
*/
  public static function limitar_cadena($cadena, $limite, $sufijo)
  {
    // Si la longitud es mayor que el límite...
    if (strlen($cadena) > $limite) {
      // Entonces corta la cadena y ponle el sufijo
      return substr($cadena, 0, $limite) . $sufijo;
    }

    // Si no, entonces devuelve la cadena normal
    return $cadena;
    // Formas de uso
    # Limitar a 3 caracteres y si es más larga cortarla, agregándole puntos suspensivos
    //echo limitar_cadena("Hola mundo soy una cadena muy larga", 3, "...");
    //echo "\n\n";
    # Limitar a 15 caracteres y si es más larga cortarla, pero no agregar nada al final
    //echo limitar_cadena("Hola mundo soy una cadena muy larga", 15, "");
  }

}
