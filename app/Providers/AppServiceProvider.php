<?php

namespace App\Providers;

use App\Servic\AddCalculateServic;
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
                return AddCalculateServic::class;
            case 'Subtract':
                return SubtractCalculateServic::class;
            case 'Multiply':
                return MultiplyCalculateServic::class;
            case 'Divide':
                return DivideCalculateServic::class;
        }
        throw new \Exception('Error: Operate {$class_name} not found.');
    }
}
