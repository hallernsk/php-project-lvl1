<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82d0edf51285ef9904aeaaf607356804
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'c2aa66d2a99e8274efd354712dd81d1a' => __DIR__ . '/../..' . '/src/games/even.php',
        '2c8a74ac6205133a604d54cfc5b995ab' => __DIR__ . '/../..' . '/src/games/calc.php',
        '113b192948c53b98c34a395d769b0d60' => __DIR__ . '/../..' . '/src/games/game.php',
        '5e650f45b0835d8d89286a50c1e5e8ec' => __DIR__ . '/../..' . '/src/games/gcd.php',
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit82d0edf51285ef9904aeaaf607356804::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
