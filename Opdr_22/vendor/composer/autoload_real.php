<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd11faca0b2cbc4df80a45c5c7a607ab9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd11faca0b2cbc4df80a45c5c7a607ab9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd11faca0b2cbc4df80a45c5c7a607ab9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd11faca0b2cbc4df80a45c5c7a607ab9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}