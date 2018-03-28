<?php  
 	
 	require_once '../vendor/autoload.php'; //Composer 

 	//Iniciar sesion
 	session_start();

 	//RUTA BASE
	$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
	$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
	define('BASE_URL', $baseUrl);

	use Phroute\Phroute\RouteCollector; //Importar el phroute
	$router = new RouteCollector();

	$route = $_GET['route'] ?? '/';

	//RUTAS

	//Counter/Login/404
	$router->controller('/',App\Controllers\LoginController::class);


	//Respuesta del server
	$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
	$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

	echo $response;
