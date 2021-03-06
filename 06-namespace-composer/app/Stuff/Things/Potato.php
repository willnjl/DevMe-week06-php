<?php

namespace App\Stuff\Things;

class Potato
{
    private $grown = false;
    private $watered = 0;

    public function water() : Potato
    {
        $this->watered += 1;
        if($this->watered >= 5){
            $this->grown = true;
        }
        return $this;
    }

    public function hasGrown() : bool
    {
        return $this->grown;
    }
}