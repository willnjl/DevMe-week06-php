<?php

declare(strict_types=1);

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
        return $this; 
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles() : array
    {
        $output = collect();
        $this->shelves->map(fn($shelf) =>$output->push(...$shelf->titles()));
        return $output;
    }
}