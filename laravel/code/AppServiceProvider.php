<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\ViewName;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //{{$variable1}}
        view()->share('variable1', 'init variable $variable1');

        //test.blade.php, welcome.blade.php
        //{{$variable2}}
        view()->composer(['test', 'welcome'], function($view){
            $view->with('variable2', 'init variable $variable2');
        });

        //<x-my-alert>
        Blade::component(Alert::class, 'my-alert');

        //hello($expression)
        Blade::directive('hello', function ($expression) {
            return "<?php echo 'Hello '.{$expression}; ?>";
        });
    }
}
