<?php
/**
 * Project: plugin-complainprint
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com, seejee1@gmail.com
 * Date: 3/30/2017
 * Time: 3:07 AM
 *
 *
 *
 * This project file is not redistributeable without permissions.
 * For more details about redistribution and reselling, contact to provided author details.
 */

namespace MCMIS\Plugin\ComplainPrint;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Router;

class Register
{


    /**
     * Bootstrap script
     *
     * @param Application $app
     * @return void
     */
    public function bootstrap(Application $app){
        $app->bind('complain.print', 'MCMIS\Plugin\ComplainPrint\Container');
        $app->bind('MCMIS\Plugin\ComplainPrint\Contract\ComplainPrint', 'MCMIS\Plugin\ComplainPrint\Container');

        $this->registerRoute($app->make(Router::class));
    }

    public function registerRoute(Router $router){
        $router->group(['middleware' => config('complainprint.middleware')], function($route){
            require_once __DIR__.'/route.php';
        });
    }

    public function onExecute($registrar){
        $registrar->loadTranslationsFrom(__DIR__.'/Publisher/lang', 'complainprint');

        $registrar->loadViewsFrom(__DIR__.'/tmpl', 'complainprint');

        $registrar->publishes([
            __DIR__.'/Publisher/config/complainprint.php' => config_path('complainprint'),
        ]);

        $registrar->publishes([
            __DIR__.'/Publisher/lang' => resource_path('lang/vendor/complainprint'),
        ]);
    }

    public function onRegister($registrar){
        $registrar->mergeConfigFrom(__DIR__.'/Publisher/config/complainprint.php', 'complainprint');
    }
}
