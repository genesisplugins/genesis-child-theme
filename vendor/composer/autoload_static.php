<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9d45c20c47d7f49ff1a700f3795354c
{
    public static $files = array (
        '0c31565011fdc73de6da99cb05a94615' => __DIR__ . '/..' . '/genesisplugins/installer/installer.php',
        '8f8c825b708b062bca898c7d5365d10c' => __DIR__ . '/../..' . '/../genesis/lib/init.php',
    );

    public static $classMap = array (
        'PAnD' => __DIR__ . '/..' . '/collizo4sky/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php',
        'WPDI_Plugin_Installer_Skin' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
        'WP_Dependency_Installer' => __DIR__ . '/..' . '/afragen/wp-dependency-installer/wp-dependency-installer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb9d45c20c47d7f49ff1a700f3795354c::$classMap;

        }, null, ClassLoader::class);
    }
}
