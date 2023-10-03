<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Blade::directive('name', function ($expression) {
/*            return '<?php if($username === "Rawan Mansour"): ?>';*/
//        });
//

        Blade::directive('name', function ($expression) {
            return $username === "Rawan Mansour";
        });
//        Blade::directive('endname', function ($expression) {
/*            return '<?php endif; ?>';*/
//        });

    }
}
