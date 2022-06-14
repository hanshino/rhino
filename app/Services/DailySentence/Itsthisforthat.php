<?php

namespace App\Services\DailySentence;

class Itsthisforthat
{
    use DailySentence;

    public function __construct()
    {
        $this->url = 'https://itsthisforthat.com/api.php?text=1';
    }
}
