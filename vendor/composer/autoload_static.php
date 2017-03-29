<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07b9e0e879723b72c64ba35809d40667
{
    public static $files = array (
        'dfade7f789b24184fcf4a7e7abbd6fb5' => __DIR__ . '/..' . '/cmb2/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07b9e0e879723b72c64ba35809d40667::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07b9e0e879723b72c64ba35809d40667::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
