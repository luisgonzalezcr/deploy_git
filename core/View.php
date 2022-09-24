<?php

class View
{

  public static function render($view, $datos = [])
  {
    // Leer lo que le pasamos  a la vista
    foreach ($datos as $key => $value) {
      $$key = $value;  // Doble signo de dolar significa: variable variable, básicamente nuestra variable sigue siendo la original, pero al asignarla a otra no la reescribe, mantiene su valor, de esta forma el nombre de la variable se asigna dinamicamente
    }

    ob_start(); // Almacenamiento en memoria durante un momento...

    // entonces incluimos la vista en el layout
    include_once dirname(__DIR__) . "/app/views/$view.php";
    $contenido = ob_get_clean(); // Limpia el Buffer
    include_once dirname(__DIR__) . '/app/views/layout.php';
  }
  
}
