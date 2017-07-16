<?php
    date_default_timezone_set('America/Bogota');
    require_once 'model/db.model.php';
    require_once 'views/assets/random/random.php';
    session_start();
    if (isset($_REQUEST["c"])) {
        $controller = strtolower($_REQUEST["c"]);
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "main";
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        call_user_func(array($controller, $action));
    } else {
        $controller = "pagina";
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller;
        $controller->main();
    }
?>
