<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfde62d416833826eccdf111742f0b8f5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfde62d416833826eccdf111742f0b8f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfde62d416833826eccdf111742f0b8f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}