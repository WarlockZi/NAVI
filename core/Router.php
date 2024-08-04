<?php

namespace core;

class Router
{
    public function __construct(
        private array $routes = [
            '/^(?P<page>\/portfolio\/project)\/(?P<id>[0-9a-zA-z]+)$/',
            '/^(?P<page>\/portfolio)$/',
            '/^(?P<page>\/services)$/',
            '/^(?P<page>\/about)$/',
            '/^(?P<page>\/contact)$/',
            '/^(?P<page>\/privacy)$/',
            '/^\/$/',
        ],
        private Route $route = new Route(),
    )
    {
        $this->route->setUri($_SERVER['REQUEST_URI']);
        $this->route->setMethod($_SERVER['REQUEST_METHOD']);
        if ($this->routeFound()) {

            $path = ROOT . "pages".DIRECTORY_SEPARATOR."{$this->route->page}.php";
            ob_start();
            include $path;
            $content = ob_get_clean();

            $layout = include INC . '/layout.php';
        }
    }

    private function routeFound(): bool
    {
        $found = false;
        foreach ($this->routes as $pattern) {
            if ($found) break;
            $matches = preg_match($pattern, $this->route->getUri(), $ma);
            if ($matches) {
                $found             = true;
                $this->route->page = $ma['page'] ?? 'index';
                $this->route->id   = $ma['id'] ?? 0;
            }
        }

        return $found;
    }

}