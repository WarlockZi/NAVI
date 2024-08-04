<?php

namespace core;

class Route
{
    public function __construct(
        private string $uri = '',
        private string $query = '',
        private string $method = '',
        private array  $params = [],
        public string $page = 'index',
        public int  $id = 0,
    )
    {

    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->parseUri($uri);
    }

    protected function parseUri($uri)
    {
        $arr         = explode('?', $uri);
        $this->uri   = $arr[0];
        $this->query = $arr[1] ?? '';
        $this->parseParams($this->query);
    }

    private function parseParams(string $query): void
    {
        if ($query) {
            $arr = explode('&', $query);
            foreach ($arr as $param) {
                $arr                   = explode('=', $param);
                $this->params[$arr[0]] = $arr[1];
            }

        }
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }


}