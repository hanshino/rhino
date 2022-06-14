<?php

namespace Tests\Feature;

use App\Services\DailySentenceService;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DailySentenceTest extends TestCase
{
    use WithFaker;

    public function test_get_sentence()
    {
        $service = app()->make(DailySentenceService::class);
        $sentence = $service->getSentence();

        $this->assertIsString($sentence);
    }
}
