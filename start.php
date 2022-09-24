<?php

define('PATH', dirname(__FILE__) . '/');

// Configuración
require PATH . 'core/init.php';
require PATH . 'app/config.php';
// Carga de todos los archivos necesarios.

if (isset($config['db']) && $config['db'] &&
    isset($config['db']['host']) && $config['db']['host'] &&
    isset($config['db']['port']) && $config['db']['port'] &&
    isset($config['db']['name']) && $config['db']['name'] &&
    isset($config['db']['user']) && $config['db']['user'])
{
	Database::init($config['db']); // Inicia una conexión con la base de datos.
	unset($config['db']); // Se eliminan los datos de la base de datos, por si acaso.
}


session_start(); // Inicia las sesiones

//capturamos la URL navegador
$router = new Router($_SERVER['REQUEST_URI']);

//Si hay error en nuestro servidor crear un archivo de error
ErrorLog::activateErrorLog(); 

// requerimos las rutas
require PATH . 'app/web.php';

// arrancamos el router
$router->run();
