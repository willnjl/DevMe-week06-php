<?php

namespace App\Library;

class Book
{
    private $currentPage = 1;
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
        return $this;
    }

    public function read($n)
    {
        $this->currentPage += $n;
        return $this;
    }

    public function currentPage()
    {
        return $this->currentPage;
    }

    public function getTitle()
    {
        return $this->title;
    }
}