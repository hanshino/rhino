<?php

namespace Tests\Feature;

use App\Services\DailySentence\DailySentenceService;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DailySentenceTest extends TestCase
{
    use WithFaker;

    public function test_get_sentence()
    {
        $service = app(DailySentenceService::class);

        // test for itsthisforthat
        $sentence = $service->getSentence('itsthisforthat');
        $this->assertIsString($sentence);

        // test for metaphorpsum
        $sentence = $service->getSentence('metaphorpsum');
        $this->assertIsString($sentence);
    }
}
