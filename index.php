<?php
$request = explode('/', $_SERVER['REQUEST_URI']);
array_shift($request);
array_shift($request);

$controllerName = 'default';
$actionName = 'index';

if (!empty($request[0]) && empty($request[1])) {
    $controllerName = $request[0];
}

if (!empty($request[0]) && !empty($request[1])) {
    $actionName = $request[1];
    $controllerName = $request[0];
}

$controllerClass = ucfirst($controllerName.'Controller');
$actionFunction = 'action'.ucfirst($actionName);

if (file_exists('./controllers/'.$controllerClass.'.php')) {
    include('./controllers/'.$controllerClass.'.php');
    $controller = new $controllerClass();
    $controller->$actionFunction();
} else {
    include('./controllers/ErrorController.php');
    $controller = new ErrorController();
    $controller->actionNotFound();
}