<?php

class Router {
    protected $routes = [];

    public function define($routes) {
        $this->routes = $routes;
    }

    public static function load($file) {
        $router = new static;

        require $file;

        return $router;
    }

    public function direct($uri) {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        echo('<h1>404 - Route not found</h1>');
        http_response_code(404);
        die();
    }
}