<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dfa4a690ddf7fd24d69d249199acb30
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Linguistics\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Linguistics\\' => 
        array (
            0 => __DIR__ . '/..' . '/carloswph/linguistics/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dfa4a690ddf7fd24d69d249199acb30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dfa4a690ddf7fd24d69d249199acb30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dfa4a690ddf7fd24d69d249199acb30::$classMap;

        }, null, ClassLoader::class);
    }
}