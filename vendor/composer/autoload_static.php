<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79947fa649ce8370bb32133699843ccf
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79947fa649ce8370bb32133699843ccf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79947fa649ce8370bb32133699843ccf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
