<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layout.sidebar', function($view){
            $archives = Post::archives();
            $tags =  Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->register(DuskServiceProvider::class); 
    }
}
