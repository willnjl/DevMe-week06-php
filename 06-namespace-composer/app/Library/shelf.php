<?php

namespace App\Library;

class Shelf
{
    private $contains;

    public function __construct()
    {
        $this->contains = collect();
    }

    public function addBook($book)
    {
        $this->contains->push($book);
    }

    public function titles()
    {
        return $this->contains->map(fn($book) => $book->getTitle())->all();
    }
}