<?php

namespace App\Livewire;

use App\Providers\AppServiceProvider;
use App\Services\Api\ApiService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class KanyeQuotes extends Component
{

    public $timer;
    public $timerValue = 60;
    public $kanyeQuotes;

    public function mount(){
      $this->fetchKanyeQoutes();
      $this->timer=$this->timerValue;
    }
    public function render()
    {
        return view('livewire.kanye-quotes');
    }

    // #[Computed()]
    // public function kanyeQuotes(){
    //     return (new ApiService())
    //     ->setUrl('https://api.kanye.rest')
    //     ->multiply(5)
    //     ->get();
    //     ;
    // }

    public function fetchKanyeQoutes(){
        $this->kanyeQuotes= (new ApiService())
        ->setUrl(AppServiceProvider::KANYE_API_URL)
        ->multiply(5)
        ->get();
        ;
    }

    public function updateTimer(){

        $this->timer --;
        if ($this->timer==0){
            $this->fetchKanyeQoutes();
            $this->timer=$this->timerValue;
        }
    }

    public function refreshContent(){
        $this->fetchKanyeQoutes();
        $this->timer=$this->timerValue;
    }
}
