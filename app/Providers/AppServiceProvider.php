<?php

namespace App\Providers;

use App\View\Components\KanyeQuoteCard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    const KANYE_API ='kanye-quotes';
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::component('kanye-quote-card', KanyeQuoteCard::class);
    }
}
