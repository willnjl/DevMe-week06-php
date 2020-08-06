<?php

namespace App\Library;

class Shelf
{
    private $contains;

    public function __construct()
    {
        $this->contains = collect();
    }

    public function addBook(Book $book)
    {
        $this->contains->push($book);
        return $this;
    }

    public function titles() : array
    {
        return $this->contains->map(fn($book) => $book->getTitle())->all();
    }
}