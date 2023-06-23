<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfdc607dd353aa5250acde818fa81551
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfdc607dd353aa5250acde818fa81551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfdc607dd353aa5250acde818fa81551::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
