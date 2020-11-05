<?php

declare(strict_types=1);

namespace App\Counter;

class Counter {
    private $count = 0;

    public function increment()
    {
        $this->count += 1;
    }

    public function count()
    {
        return $this->count;
    }
}