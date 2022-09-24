<?php
spl_autoload_register(function ($clase) {

  $directorios =  [
    'functions',
    'controllers',
    'models',
  ];

  foreach ($directorios as $directorio) {
    $file = (__DIR__ . DIRECTORY_SEPARATOR . $directorio . DIRECTORY_SEPARATOR . $clase . '.php');
    if (file_exists($file)) {
      require_once $file;
    }
  }
});
