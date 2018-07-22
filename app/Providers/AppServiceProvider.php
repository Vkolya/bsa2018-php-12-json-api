<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CurrencyServiceInterface;
use App\Services\CurrencyService;
use App\Services\UserServiceInterface;
use App\Services\UserService;
use App\Services\WalletServiceInterface;
use App\Services\WalletService;
use App\Services\MoneyServiceInterface;
use App\Services\MoneyService;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonApi::defaultApi('v1');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
       
        $this->app->bind(CurrencyServiceInterface::class,function () {
            return new CurrencyService();
        });
        $this->app->bind(UserServiceInterface::class,function () {
            return new UserService();
        });
        $this->app->bind(WalletServiceInterface::class,function () {
            return new WalletService();
        });
        $this->app->bind(MoneyServiceInterface::class,function () {
            return new MoneyService();
        });
    }
}
