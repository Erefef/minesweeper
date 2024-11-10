<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabc704b282a76268a3554fa71faa24c1
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '9264fa4f5fa3c06f48edabeb8e054ffb' => __DIR__ . '/../..' . '/src/Controller.php',
        '2af47fcbaae3031ec6ec8601a03cfda8' => __DIR__ . '/../..' . '/src/View.php',
        'b77bc1a0d37052ac16e53c933e427a8a' => __DIR__ . '/../..' . '/src/Game.php',
        '97c0c1d4daa380779ecb39273493202e' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'M' => 
        array (
            'Morsel\\Minesweeper\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Morsel\\Minesweeper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitabc704b282a76268a3554fa71faa24c1::$classMap;

        }, null, ClassLoader::class);
    }
}