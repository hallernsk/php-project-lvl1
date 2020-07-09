<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82d0edf51285ef9904aeaaf607356804
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'c0293274d3c4b301a5a071fe2375f7ce' => __DIR__ . '/../..' . '/src/Cli.php',
        '2b3d92bb62019e4ad9eb521ad6f937d4' => __DIR__ . '/../..' . '/src/even.php',
        '2c8a74ac6205133a604d54cfc5b995ab' => __DIR__ . '/../..' . '/src/games/calc.php',
        '113b192948c53b98c34a395d769b0d60' => __DIR__ . '/../..' . '/src/games/game.php',
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
