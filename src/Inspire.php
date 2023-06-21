<?php

namespace JamaicanFriedChicken\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {

    public function getQuote() {
        $response = Http::get('https://zenquotes.io/api/random');
        // dd($response[0]['q']);
        return $response[0]['q'] . ' -' . $response[0]['a'];
    }
}