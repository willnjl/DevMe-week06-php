<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

class Validator
{
    public function email(string $str) : bool
    {
        return preg_match('/^\S+@[a-z]+[.][a-z]+/i', $str) === 1;
    }

    public function postcode(string $str) : bool
    {
        return preg_match('/^\D+\w+\s\d+\D{2}$/i', $str) === 1;
    }
}

$validator = new Validator();

// it validates email addresses
echo "Email\n";
dump($validator->email("alfonso@example.com")); // true
dump($validator->email("wombat+12@spoons.plumbing")); // true
dump($validator->email("blah blah blah! alfonso@example.com")); // false
dump($validator->email("wombat@spoonsplumbing")); // false
dump($validator->email("wombatspoons")); // false
dump($validator->email("@wombatspoons")); // false

// it validates postcodes
echo "\nPostcode\n";
dump($validator->postcode("BS4 3UH")); // true
dump($validator->postcode("S10 4GR")); // true
dump($validator->postcode("BS14 9DI")); // true
dump($validator->postcode("SW1A 1AA")); // true
dump($validator->postcode("12B DI9")); // false
dump($validator->postcode("EST4 DD29")); // false
dump($validator->postcode("blah blah BS5 8RJ blah blah")); // false