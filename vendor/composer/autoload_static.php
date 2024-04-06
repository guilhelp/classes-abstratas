<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b32fc429d68f09fde6bf9a4fcac4fbe
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b32fc429d68f09fde6bf9a4fcac4fbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b32fc429d68f09fde6bf9a4fcac4fbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b32fc429d68f09fde6bf9a4fcac4fbe::$classMap;

        }, null, ClassLoader::class);
    }
}