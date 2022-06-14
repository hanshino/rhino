<?php

namespace App\Services\DailySentence;

class Metaphorpsum
{
    use DailySentence;

    public function __construct()
    {
        $this->url = 'http://metaphorpsum.com/sentences/3';
    }
}
