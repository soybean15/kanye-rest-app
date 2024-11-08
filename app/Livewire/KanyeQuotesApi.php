<?php

namespace App\Livewire;

use App\Providers\AppServiceProvider;
use Livewire\Component;

class KanyeQuotesApi extends Component
{

    public $api_url;
    public function render()
    {
        return view('livewire.kanye-quotes-api');
    }

    public function mount(){

        $this->api_url = url()->current().'/'.AppServiceProvider::KANYE_API.'?token=<your_api_token>';


    }
}
