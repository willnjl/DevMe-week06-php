<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch {
    private $status = false;

    public function isOn(){
        return $this->status;
    }
    
    public function turnOn(){
        $this->status = true;
        return $this->status;
    }
    
    public function turnOff(){
        $this->status = false;
        return $this->status;
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