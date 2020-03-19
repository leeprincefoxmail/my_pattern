<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit878dfb0b70c3242b89f512c31a9add79
{
    public static $files = array (
        'be09a21f5e72de649375d5f5f9064909' => __DIR__ . '/..' . '/leeprince/composer_minilaravel/src/Support/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minilaravel\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minilaravel\\' => 
        array (
            0 => __DIR__ . '/..' . '/leeprince/composer_minilaravel/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit878dfb0b70c3242b89f512c31a9add79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit878dfb0b70c3242b89f512c31a9add79::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
