<?php 

class Router {
    private $routes = [];

    public function registerRoutes($method, $uri, $controller) {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];

    }
    public function get($uri, $controller) {
        $this->registerRoutes('GET', $uri, $controller);
    }

     public function post($uri, $controller) {
        $this->registerRoutes('POST', $uri, $controller);
    }

     public function put($uri, $controller) {
        $this->registerRoutes('PUT', $uri, $controller);
    }

     public function delete($uri, $controller) {
        $this->registerRoutes('DELETE', $uri, $controller);
    }
}
