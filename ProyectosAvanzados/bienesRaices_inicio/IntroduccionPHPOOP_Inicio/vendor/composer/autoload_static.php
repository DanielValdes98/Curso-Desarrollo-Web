<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit804ae79394011c12b8d6140d60e14e03
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Daniel\\IntroduccionPhpoopInicio\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Daniel\\IntroduccionPhpoopInicio\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit804ae79394011c12b8d6140d60e14e03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit804ae79394011c12b8d6140d60e14e03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit804ae79394011c12b8d6140d60e14e03::$classMap;

        }, null, ClassLoader::class);
    }
}