<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde3035baa108b2bc4948732c35082c30
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ngohuunhut\\First\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ngohuunhut\\First\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitde3035baa108b2bc4948732c35082c30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde3035baa108b2bc4948732c35082c30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde3035baa108b2bc4948732c35082c30::$classMap;

        }, null, ClassLoader::class);
    }
}
