<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9d24dbb9546c07b0098505b8f04db79
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9d24dbb9546c07b0098505b8f04db79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9d24dbb9546c07b0098505b8f04db79::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9d24dbb9546c07b0098505b8f04db79::$classMap;

        }, null, ClassLoader::class);
    }
}
