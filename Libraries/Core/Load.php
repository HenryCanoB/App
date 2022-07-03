<?php
$ControllerFile = "Controllers/" . $controller . ".php";
if (file_exists($ControllerFile)) {
    require_once($ControllerFile);
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        require_once("Controllers/Error.php");
    }
} else {
    require_once("Controllers/Error.php");
};
