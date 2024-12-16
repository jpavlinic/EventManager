<?php

final class Router {

    private $pattern = "/^(?<controller>[a-z]+)\/(?<action>[a-z]+)(?<params>[\/\d+]*)\/?$/";
    private $controller = "UserController";
    private $action = "login";
    private $params = [];

    public function dispatch($query_string) {

        if ($query_string && ($parsed = $this->parse($query_string))) {
            $this->controller = $parsed['controller'];
            $this->action = $parsed['action'];
        }
        
        if (class_exists($this->controller)) {
            $controller = new $this->controller();
            if (is_callable([$controller, $this->action])) {
                $controller->{$this->action}($this->params);
            } else {
                throw new Exception("Method '$this->action' in controller '$this->controller' not found");
            }
        } else {
            throw new Exception("Controller class '$this->controller' not found");
        }
    }

    private function parse($query_string) {
        if (preg_match($this->pattern, $query_string, $matches)) {
            $controller = ucfirst($matches["controller"]) . 'Controller';
            $action = $matches["action"];
            $params = explode("/", ltrim($matches["params"], "/"));
            return [
                'controller' => $controller,
                'action' => $action,
                'params' => $params
            ];
        }
        return false;
    }
}
