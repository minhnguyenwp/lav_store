<?php 
namespace ACEW\SalePolicy\Providers;

use Illuminate\Support\ServiceProvider;

    /**
 * SalePolicy service provider
 *
 * @author    Jane Doe <janedoe@gmail.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class SalePolicyServiceProvider extends ServiceProvider
{

    
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'salepolicy');
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'salepolicy');

        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
        
    }
}
?>