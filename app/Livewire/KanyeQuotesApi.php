<?php

namespace App\Livewire;

use App\Providers\AppServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class KanyeQuotesApi extends Component
{

    public $api_url;

    public $token;

    public $currentRoute;
    public function render()
    {
        return view('livewire.kanye-quotes-api');
    }

    public function mount(){


        $this->currentRoute =url()->current();
        // dd(Auth::user()->tokens);

        $this->reloadToken();

    }

    public function reloadToken(){
        $this->token = Auth::user()->tokens->where('name', AppServiceProvider::KANYE_API_TOKEN)->whereNull('expires_at')->first()->token;

        $this->api_url = $this->currentRoute.'/'.AppServiceProvider::KANYE_API."?token=$this->token";
    }

    public function generateToken(){

        $user = Auth::user();
        $user->tokens()->delete();
        $token = Auth::user()->createToken(AppServiceProvider::KANYE_API_TOKEN);

        $this->reloadToken();
        // dd($token);
        $this->token =$token->plainTextToken;

    }
}
