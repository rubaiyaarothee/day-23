<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36f06d9a0dd563bc3ba02a4d63a202e8
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36f06d9a0dd563bc3ba02a4d63a202e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36f06d9a0dd563bc3ba02a4d63a202e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
