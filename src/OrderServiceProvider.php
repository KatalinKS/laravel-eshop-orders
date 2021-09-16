<?php

namespace KatalinKS\Order;

use KatalinKS\Order\Commands\OrderCommand;
use KatalinKS\Order\Contracts\Builder\OrderBuyerBuilder;
use KatalinKS\Order\Contracts\Dictionary\OrderItemStatus as OrderItemStatusContract;
use KatalinKS\Order\Contracts\Dictionary\OrderStatus as OrderStatusContract;
use KatalinKS\Order\Contracts\Order as OrderContract;
use KatalinKS\Order\Contracts\OrderBuyer;
use KatalinKS\Order\Models\Dictionary\OrderItemStatus;
use KatalinKS\Order\Models\Dictionary\OrderStatus;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OrderServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->registerModels()
            ->registerBuilders();

        return parent::boot(); // TODO: Change the autogenerated stub
    }

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

    protected function registerModels(): self
    {
        $this->app->bind(OrderStatusContract::class, OrderStatus::class);
        $this->app->bind(OrderItemStatusContract::class, OrderItemStatus::class);
        $this->app->bind(OrderContract::class, \KatalinKS\Order\Models\Order::class);
        $this->app->bind(OrderBuyer::class, \KatalinKS\Order\Models\OrderBuyer::class);

        return $this;
    }

    protected function registerBuilders(): self
    {
        $this->app->bind(OrderBuyerBuilder::class, \KatalinKS\Order\Builder\OrderBuyerBuilder::class);

        return $this;
    }
}
