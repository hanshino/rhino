<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class DailySentenceService
{
    public function getSentence()
    {
        $response = Http::get('http://metaphorpsum.com/sentences/3');

        if (!$response->ok()) {
            throw new Exception('Error getting daily sentence');
        }

        return $response->body();
    }
}
