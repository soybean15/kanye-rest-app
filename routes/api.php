<?php

use App\Http\Controllers\KanyeQoutesApiController;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\Route;




Route::get(AppServiceProvider::KANYE_API ,[KanyeQoutesApiController::class,'index'])
->middleware('kanye_quotes');
