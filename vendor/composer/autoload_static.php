<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteac6617baaad5964b1317ccb98e1d0dd
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'staditek\\TugasAkhir\\App\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'staditek\\TugasAkhir\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'staditek\\TugasAkhir\\App\\config\\database' => __DIR__ . '/../..' . '/app/config/database.php',
        'staditek\\TugasAkhir\\App\\controller\\Customer\\customerController' => __DIR__ . '/../..' . '/app/controller/Customer/customerController.php',
        'staditek\\TugasAkhir\\App\\controller\\Payment\\paymentController' => __DIR__ . '/../..' . '/app/controller/Payment/paymentController.php',
        'staditek\\TugasAkhir\\App\\controller\\Users\\userController' => __DIR__ . '/../..' . '/app/controller/Users/userController.php',
        'staditek\\TugasAkhir\\App\\controller\\Users_Group\\userGroupController' => __DIR__ . '/../..' . '/app/controller/Users_Group/userGroupController.php',
        'staditek\\TugasAkhir\\App\\controller\\Vendor\\vendorController' => __DIR__ . '/../..' . '/app/controller/Vendor/vendorController.php',
        'staditek\\TugasAkhir\\App\\core\\router' => __DIR__ . '/../..' . '/app/core/router.php',
        'staditek\\TugasAkhir\\App\\model\\Customer\\customerModel' => __DIR__ . '/../..' . '/app/model/Customer/customerModel.php',
        'staditek\\TugasAkhir\\App\\model\\Payment\\paymentModel' => __DIR__ . '/../..' . '/app/model/Payment/paymentModel.php',
        'staditek\\TugasAkhir\\App\\model\\Users\\usersModel' => __DIR__ . '/../..' . '/app/model/Users/usersModel.php',
        'staditek\\TugasAkhir\\App\\model\\Users_Group\\usersGroupModel' => __DIR__ . '/../..' . '/app/model/Users_Group/usersGroupModel.php',
        'staditek\\TugasAkhir\\App\\model\\Vendor\\vendorModel' => __DIR__ . '/../..' . '/app/model/Vendor/vendorModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteac6617baaad5964b1317ccb98e1d0dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteac6617baaad5964b1317ccb98e1d0dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteac6617baaad5964b1317ccb98e1d0dd::$classMap;

        }, null, ClassLoader::class);
    }
}
