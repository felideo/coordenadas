<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a0ac37aa804ffe0fb3178018486cae8
{
    public static $files = array (
        '2c0c79444069dd013c85805496406646' => __DIR__ . '/..' . '/felideo/debug2/src/debug2.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a0ac37aa804ffe0fb3178018486cae8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a0ac37aa804ffe0fb3178018486cae8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
