<?php

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
        return $this; 
    }

    public function addShelf($shelf)
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles()
    {
        $output = collect();
        $this->shelves->map(fn($shelf) =>$output->push(...$shelf->titles()));
        return $output;
    }
}