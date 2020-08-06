<?php
declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

class LightSwitch
{
    private $status = false;

    public function isOn() : bool
    {
        return $this->status;
    }
    
    public function turnOn() : LightSwitch
    {
        $this->status = true;
        return $this;
    }
    
    public function turnOff() : LightSwitch
    {
        $this->status = false;
        return $this;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false