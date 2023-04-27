<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85ded2129d7aef17475f619457f0d6a7
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ProductController' => __DIR__ . '/../..' . '/app/controllers/productController.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/app/models/product.php',
        'App\\Router' => __DIR__ . '/../..' . '/app/Router.php',
        'App\\controllers\\PageController' => __DIR__ . '/../..' . '/app/controllers/PageController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'customer' => __DIR__ . '/../..' . '/app/models/customer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85ded2129d7aef17475f619457f0d6a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85ded2129d7aef17475f619457f0d6a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85ded2129d7aef17475f619457f0d6a7::$classMap;

        }, null, ClassLoader::class);
    }
}