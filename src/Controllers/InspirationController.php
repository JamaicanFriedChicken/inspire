<?php

namespace JamaicanFriedChicken\Inspire\Controllers;

use Illuminate\Http\Request;
use JamaicanFriedChicken\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->getQuote();

        return $quote;
    }
}