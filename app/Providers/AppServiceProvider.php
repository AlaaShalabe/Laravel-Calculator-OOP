<?php

namespace App\Providers;

use App\Contracts\CalculateServiceContract;
use App\Service\AddCalculateService;
use App\Service\DivideCalculateService;
use App\Service\MultiplyCalculateService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (request()->has('operate')) {
            $calssName = $this->resolveOperateDependency(request()->get('operate'));
            $this->app->bind(CalculateServiceContract::class, $calssName);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    public function resolveOperateDependency($calssName)
    {
        switch ($calssName) {
            case 'Add':
                return AddCalculateService::class;
            case 'Subtract':
                return SubtractCalculateService::class;
            case 'Multiply':
                return MultiplyCalculateService::class;
            case 'Divide':
                return DivideCalculateService::class;
        }
        throw new \Exception('Error: Operate {$class_name} not found.');
    }
}
