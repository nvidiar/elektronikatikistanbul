<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;
use View;

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

        Carbon::setLocale('tr');
        $name = 'Elektronik Atık İstanbul';
        $phone = '+905354928038';
        View::share([
            'name' => $name,
            'phone' => $phone,
            'address' => 'Tahtakale Mahallesi Trafo Caddesi Çalıkuşu Sokak No:4 Avcılar/İstanbul',
            'mail' => 'merhaba@elektronikatikistanbul.com',
        ]);
    }
}
