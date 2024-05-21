<?php 

class Views {
    public function getView($controller, $view, $data = []) {
        // Si $controller es un objeto, obtener su nombre de clase
        if (is_object($controller)) {
            $controllerName = get_class($controller);
        } else {
            // Si $controller es un nombre de clase, usarlo directamente
            $controllerName = $controller;
        }

        $controllerName = str_replace('Controller', '', $controllerName);
        $viewPath = "Views/" . strtolower($controllerName) . "/{$view}.php";

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die("Vista no encontrada: {$viewPath}");
        }
    }
}





