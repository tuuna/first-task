<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05801da9256c761a872c9427703fdfd1
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'e1edc6b39e340029dfa1d72c228b8497' => __DIR__ . '/..' . '/xiaoler/blade/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xiaoler\\Blade\\' => 14,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xiaoler\\Blade\\' => 
        array (
            0 => __DIR__ . '/..' . '/xiaoler/blade/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'ChartController' => __DIR__ . '/../..' . '/app/Controllers/ChartController.php',
        'ChartRepository' => __DIR__ . '/../..' . '/app/Repositories/ChartRepository.php',
        'Order' => __DIR__ . '/../..' . '/app/Models/Order.php',
        'OrderController' => __DIR__ . '/../..' . '/app/Controllers/OrderController.php',
        'OrderHour' => __DIR__ . '/../..' . '/app/Models/OrderHour.php',
        'OrderRepository' => __DIR__ . '/../..' . '/app/Repositories/OrderRepository.php',
        'OrderUrl' => __DIR__ . '/../..' . '/app/Models/OrderUrl.php',
        'StaticDay' => __DIR__ . '/../..' . '/app/Models/StaticDay.php',
        'StaticHour' => __DIR__ . '/../..' . '/app/Models/StaticHour.php',
        'StaticTotal' => __DIR__ . '/../..' . '/app/Models/StaticTotal.php',
        'UrlController' => __DIR__ . '/../..' . '/app/Controllers/UrlController.php',
        'UrlRepository' => __DIR__ . '/../..' . '/app/Repositories/UrlRepository.php',
        'View' => __DIR__ . '/../..' . '/assist/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05801da9256c761a872c9427703fdfd1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05801da9256c761a872c9427703fdfd1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit05801da9256c761a872c9427703fdfd1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit05801da9256c761a872c9427703fdfd1::$classMap;

        }, null, ClassLoader::class);
    }
}
