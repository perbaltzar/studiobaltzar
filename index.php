<?php

declare(strict_types=1);

// In order to autoload the classes we need to require Composer's autoload file.
require __DIR__.'/vendor/autoload.php';

// Now we can use the Router class and register the routes.
$router = new Router([
    '' => __DIR__.'/views/index.view.php',
    'packagist' => __DIR__.'/views/packagist.view.php',
]);

// Direct the router based on the current request URI and require a view file.
require $router->direct(Request::uri());
