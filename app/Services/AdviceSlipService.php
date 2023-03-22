<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AdviceSlipService{
 
    //
  
    public function adviceRequest()
    {
        $response = json_decode(Http::acceptJson()->get('https://api.adviceslip.com/advice'));
        return $response->slip;
    }

}