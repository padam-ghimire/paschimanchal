<?php namespace App\Providers;

use View;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function boot()
    {
        View::composer('*', function($view){
            $settings= Settings::all();

        
            $view->with('settings', $settings);
        });
    }


    public function register()
    {
        
    }
}