<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit203db75d20af13c228b38fe263f92411
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inheritance\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inheritance\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit203db75d20af13c228b38fe263f92411::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit203db75d20af13c228b38fe263f92411::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit203db75d20af13c228b38fe263f92411::$classMap;

        }, null, ClassLoader::class);
    }
}
