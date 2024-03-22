<?php

namespace App\Providers;

use App\Interfaces\Shipment\Shipment;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //        $this->configureBindings();


        $this->app->bind(
            'App\\Repositories\\BusinessRepository',
            'App\\Repositories\\Business\\MysqlRepository'
        );
        //
        $this->app->bind(
            'App\\Repositories\\UserRepository',
            'App\\Repositories\\User\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\BusinessLocationRepository',
            'App\\Repositories\\BusinessLocation\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\InvoiceSchemeRepository',
            'App\\Repositories\\InvoiceScheme\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\InvoiceLayoutRepository',
            'App\\Repositories\\InvoiceLayout\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\SubscriptionRepository',
            'App\\Repositories\\Subscription\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\ModuleRepository',
            'App\\Repositories\\Module\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\SellingPriceGroupRepository',
            'App\\Repositories\\SellingPriceGroup\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\CountryRepository',
            'App\\Repositories\\Country\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\StateRepository',
            'App\\Repositories\\State\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\CityRepository',
            'App\\Repositories\\City\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\CategoryRepository',
            'App\\Repositories\\Category\\MysqlRepository'
        );

        $this->app->bind(
            'App\\Repositories\\UnitRepository',
            'App\\Repositories\\Unit\\MysqlRepository'
        );
        //
        // $this->app->bind(
        //     'App\\Interfaces\\Shipment\\BostaShipmentInterface',
        //     'App\\Repositories\\Shipment\BostaShipmentRepository'
        // );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    //    private function configureBindings()
    //    {
    //        $this->app->when(Shipment::class)->needs(B_Interface::class)->give(function () {
    //            return new B_Class();
    //        });
    //    }

}
