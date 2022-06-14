<?php

namespace App\Services\DailySentence;

use Illuminate\Support\Facades\Http;

trait DailySentence
{
    /**
     * @var string $url The URL of the daily sentence API.
     */
    public string $url;

    /**
     * @var string $response The response of the daily sentence API.
     */
    public string $response;

    /**
     * Fetch the daily sentence.
     * @return string
     * @throws \Exception
     */
    public function get(): string
    {
        $response = Http::get($this->url);

        if (!$response->ok()) {
            throw new \Exception('Failed to fetch daily sentence.');
        }

        $this->response = $response->body();
        return $this->response;
    }
}
