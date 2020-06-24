<?php 
namespace ACEW\GeneralSetting\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * GeneralSetting service provider
 *
 * @author    Ming Nguyen <minh@qamera.com>
 * @copyright 2020 Qamera Ltd
 */
class GeneralSettingServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        include __DIR__ . '/../Http/admin-routes.php';

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'GeneralSetting');
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu.admin'
        );
    }
}