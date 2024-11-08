<?php

use App\Livewire\KanyeQuotes;
use App\Livewire\KanyeQuotesApi;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',KanyeQuotes::class);
Route::get('/api',KanyeQuotesApi::class);

