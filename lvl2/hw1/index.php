<?php

spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/html/' . $className . '.php';
});

$route = $_GET['route'] ?? '';
$routes = require __DIR__ . '/routes.php';

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true;
        break;
    }
}
if (!$isRouteFound) {
    echo 'Страницы нет';
    return;
}
unset ($matches[0]);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];
$controller = new $controllerName();
$controller->$actionName(...$matches);
