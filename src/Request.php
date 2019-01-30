<?php

declare(strict_types=1);

/**
 * This is the request class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Request
{
    /**
     * Get the current request URI.
     *
     * @return string
     */
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}
