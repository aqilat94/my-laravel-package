<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02b5dd673ceeb69ec8ae135d792d8862
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mras\\CustomAuth\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mras\\CustomAuth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02b5dd673ceeb69ec8ae135d792d8862::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02b5dd673ceeb69ec8ae135d792d8862::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02b5dd673ceeb69ec8ae135d792d8862::$classMap;

        }, null, ClassLoader::class);
    }
}
