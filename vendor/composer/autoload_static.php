<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb0604cb9596f0b4f3acf7eebade3012
{
    public static $classMap = array (
        'Request' => __DIR__ . '/../..' . '/src/Request.php',
        'Router' => __DIR__ . '/../..' . '/src/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticIniteb0604cb9596f0b4f3acf7eebade3012::$classMap;

        }, null, ClassLoader::class);
    }
}
