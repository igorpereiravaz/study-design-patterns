<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4709ea8de2d2c804d34852498718aa0d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ArquiteturaPHP\\DesignPattern\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ArquiteturaPHP\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4709ea8de2d2c804d34852498718aa0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4709ea8de2d2c804d34852498718aa0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4709ea8de2d2c804d34852498718aa0d::$classMap;

        }, null, ClassLoader::class);
    }
}
