<?php namespace App\Providers;

use View;
use App\Models\News;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function boot()
    {
        View::composer('*', function($view){
            $settings= Settings::all();
            $news= News::inRandomOrder()->limit(4)->get();

        
            $view->with('settings', $settings)
            ->with('news',$news);
        });
    }


    public function register()
    {
        
    }
}