<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2032906f7db44897c013f2e3a29d0b23
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'E' => 
        array (
            'Exceptions\\' => 11,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Colors\\' => 7,
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
        'Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Exceptions',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2032906f7db44897c013f2e3a29d0b23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2032906f7db44897c013f2e3a29d0b23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2032906f7db44897c013f2e3a29d0b23::$classMap;

        }, null, ClassLoader::class);
    }
}
