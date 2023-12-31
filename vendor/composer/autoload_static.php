<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5474d6e0f078eaebfe909237e96d6d06
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5474d6e0f078eaebfe909237e96d6d06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5474d6e0f078eaebfe909237e96d6d06::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5474d6e0f078eaebfe909237e96d6d06::$classMap;

        }, null, ClassLoader::class);
    }
}
