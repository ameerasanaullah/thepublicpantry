<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96fae1129e0657f4f84f01c933ffefe4
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit96fae1129e0657f4f84f01c933ffefe4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit96fae1129e0657f4f84f01c933ffefe4::$classMap;

        }, null, ClassLoader::class);
    }
}
