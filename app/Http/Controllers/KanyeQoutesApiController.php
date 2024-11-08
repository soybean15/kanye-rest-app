<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use App\Services\Api\ApiService;
use Illuminate\Http\Request;

class KanyeQoutesApiController extends Controller
{
    //

    public function index(){


        $response = (new ApiService())->setUrl(AppServiceProvider::KANYE_API_URL)
        ->multiply(5)
        ->get();
        return response()->json(
            $response
        );
    }
}
