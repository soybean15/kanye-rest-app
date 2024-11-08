<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;

class ApiService
{


    public $url;
    public $token;

    public $response=[];

    public $numberOfItems = 1;
    public function __construct( $url = null)
    {

        $this->url = $url;

    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function multiply($numberOfItems){
        $this->numberOfItems = $numberOfItems;


        return $this;
    }

    private function fetchItem(){

        $response = Http::get($this->url);
        if ($response->successful()) {

            $this->response[]=  $response->json();;

        }else{
            throw new \Exception("Failed to fetch item from API with status code: " . $response->status());
        }
    }

    public function get()
    {
        for ($i = 0; $i < $this->numberOfItems; $i++) {

            $this->fetchItem();

        }

        return $this->response;


        // $items = [];
        // for ($i = 0; $i <= $this->numberOfItems; $i++) {
        //     $response = Http::get($this->url);
        //     if ($response->successful()) {

        //         $data = $response->json();

        //         if (is_array($data)) {
        //             $items[] = $data;
        //         } else {
        //             $items[] = [$data];
        //         }
        //     }
        //     else {
        //         throw new \Exception("Failed to fetch item from API with status code: " . $response->status());
        //     }
        // }

        // dd($items);


        // return $items;
    }
}
