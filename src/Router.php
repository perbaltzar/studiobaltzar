<?php

declare(strict_types=1);

/**
 * This is the router class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Router
{
    /**
     * The routes array.
     *
     * @var string[]
     */
    protected $routes;

    /**
     * Create a new router instance.
     *
     * @param array $routes
     *
     * @return void
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * Direct a route to its view.
     *
     * @param string $uri
     *
     * @throws \Exception
     *
     * @return string
     */
    public function direct(string $uri): string
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}
