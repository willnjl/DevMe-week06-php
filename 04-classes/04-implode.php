<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

class Address
{
    private $street;
    private $town;
    private $postcode;

    public function __construct($street, $town, $postcode)
    {
        $this->street = $street;
        $this->town = $town;
        $this->postcode = $postcode;
    }

    public function setStreet(string $newStreet) : Address
    {
        $this->street = $newStreet;
        return $this;
    }

    public function setTown(string $newTown) : Address
    {
        $this->town = $newTown;
        return $this;
    }

    public function setPostcode(string $newPostcode) : Address
    {
        $this->postcode = $newPostcode;
        return $this;
    }

    public function fullAddress() : string
    {
        return implode(", ", [
            $this->street,
            $this->town, 
            $this->postcode
        ]);
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"