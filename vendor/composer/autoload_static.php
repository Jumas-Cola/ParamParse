<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc81bedbfd13c25d1783183781aa9765a
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JumasCola\\ParamParse\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JumasCola\\ParamParse\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc81bedbfd13c25d1783183781aa9765a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc81bedbfd13c25d1783183781aa9765a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc81bedbfd13c25d1783183781aa9765a::$classMap;

        }, null, ClassLoader::class);
    }
}
