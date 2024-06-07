<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd31cf0993cb42bbdfb7bcbdb99a1dc4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd31cf0993cb42bbdfb7bcbdb99a1dc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd31cf0993cb42bbdfb7bcbdb99a1dc4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
