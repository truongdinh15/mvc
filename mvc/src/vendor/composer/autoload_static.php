<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fe759e58e5f67c8f551750d03e664ef
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fe759e58e5f67c8f551750d03e664ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fe759e58e5f67c8f551750d03e664ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
