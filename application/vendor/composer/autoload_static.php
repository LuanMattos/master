<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb943c46219488dafaf89f7e969c8c84e
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UnicoService\\' => 13,
        ),
        'S' => 
        array (
            'Service\\' => 8,
            'ServiceZenvia\\' => 14,
            'ServiceSms\\' => 11,
        ),
        'M' => 
        array (
            'Modules\\Account\\RestoreAccount\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UnicoService\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services/modules',
        ),
        'Service\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'ServiceZenvia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'ServiceSms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'Modules\\Account\\RestoreAccount\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services/modules/account',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb943c46219488dafaf89f7e969c8c84e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb943c46219488dafaf89f7e969c8c84e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
