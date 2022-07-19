<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04c793ae47b3a7520d076c62f8f4da1e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04c793ae47b3a7520d076c62f8f4da1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04c793ae47b3a7520d076c62f8f4da1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04c793ae47b3a7520d076c62f8f4da1e::$classMap;

        }, null, ClassLoader::class);
    }
}