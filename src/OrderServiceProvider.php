<?php

namespace KatalinKS\Order;

use KatalinKS\Order\Commands\OrderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OrderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-eshop-orders')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-eshop-orders_table')
            ->hasCommand(OrderCommand::class);
    }
}
