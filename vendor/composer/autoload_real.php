<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitceea590d7d881be9abfeccb58c2cd4d0
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

        spl_autoload_register(array('ComposerAutoloaderInitceea590d7d881be9abfeccb58c2cd4d0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitceea590d7d881be9abfeccb58c2cd4d0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitceea590d7d881be9abfeccb58c2cd4d0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
