<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []

    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }
    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }
        throw new Exception('Rota não encontrada!');
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    public function get($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    protected function callAction($controller, $action)
    {
        $controller = new $controller;
        if (!method_exists($controller, $action)) {
            throw new Exception("algo deu errado aqui, meu!");
        }
        return $controller->$action();
    }
}
