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
