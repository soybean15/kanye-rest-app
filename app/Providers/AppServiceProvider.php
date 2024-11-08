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

    const KANYE_API_URL='https://api.kanye.rest';

    const KANYE_API ='kanye-quotes';
    const KANYE_API_TOKEN='kanye_api_token';
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
