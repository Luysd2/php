<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde84eb4f3e63df9bbf4959a0cf1733e6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde84eb4f3e63df9bbf4959a0cf1733e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde84eb4f3e63df9bbf4959a0cf1733e6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitde84eb4f3e63df9bbf4959a0cf1733e6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitde84eb4f3e63df9bbf4959a0cf1733e6::$classMap;

        }, null, ClassLoader::class);
    }
}
