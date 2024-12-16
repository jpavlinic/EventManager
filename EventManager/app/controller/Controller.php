<?php

class Controller {

    public function model() {
        $model = str_replace("Controller", "Model", get_class($this));
        return new $model();
    }

    public function view($data = []) {
        $controller = strtolower(str_replace('Controller', '', get_called_class()));
        $action = debug_backtrace()[1]['function'];
        $viewTemplate = 'app/view/' . $controller . '/' . $action . '.php';
        if (!file_exists($viewTemplate)) {
            throw new Exception("Template file: " . $viewTemplate . " doesn't exist.");
        }


        require 'app/view/inc/header.php';
        if (!empty($data)) {
            require 'app/view/inc/navbar.php';
        }
        require $viewTemplate;
        require 'app/view/inc/footer.php';
    }
}
