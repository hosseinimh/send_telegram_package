<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite02f7431d7724a6e03d45e0aa2cc5f36
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hosseinimh\\Telegram\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hosseinimh\\Telegram\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite02f7431d7724a6e03d45e0aa2cc5f36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite02f7431d7724a6e03d45e0aa2cc5f36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite02f7431d7724a6e03d45e0aa2cc5f36::$classMap;

        }, null, ClassLoader::class);
    }
}
