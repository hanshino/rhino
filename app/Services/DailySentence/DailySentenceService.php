<?php

namespace App\Services\DailySentence;

use Illuminate\Support\Str;

class DailySentenceService
{
    public $allowType = [
        'itsthisforthat',
        'metaphorpsum',
    ];

    public function getSentence(string $type = 'metaphorpsum'): string
    {
        $type = Str::lower($type);

        if (!in_array($type, $this->allowType)) {
            throw new \Exception('Invalid type.');
        }

        $class = __NAMESPACE__ . '\\' . $type;

        if (!class_exists($class)) {
            throw new \Exception('Invalid type.');
        }

        $sentence = (new $class)->get();

        return $sentence;
    }
}
