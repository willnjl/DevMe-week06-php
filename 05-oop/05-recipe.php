<?php

require __DIR__ . "/vendor/autoload.php";

class Ingredient
{
    private $name;
    private $allergens;
    private $amount;

    public function __construct($name, $allergens)
    {
        $this->name = $name;
        $this->allergens = $allergens;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAllergens()
    {
        return $this->allergens;
    }
    
    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}


class Recipe
{
    private $name;
    private $ingredients;
    private $method;

    public function __construct($name)
    {
        $this->name = $name;
        $this->ingredients = collect();
    }

    public function addIngredient($ingredient,$amount)
    {   
        $this->ingredients->push($ingredient);
        $ingredient->setAmount($amount);
        return $this;
    }

    public function addMethod($string)
    {
        $this->method = $string;
        return $this;
    }

    public function dietary()
    {
        $output = [];

        foreach($this->ingredients as $ingredient){
            $allergens = $ingredient->getAllergens();
            $output = array_unique(array_merge($output, $allergens));
        };
        return implode(", ", $output);
    }

    public function vegan()
    {
        return $this->ingredients
        ->map(fn($item) => $item->getAllergens())
        ->contains('animal produce');

    }

    public function display()
    {
        echo "{$this->name} \n";
        echo "\nIngredients \n\n";
        foreach($this->ingredients as $ingredient){
            echo "-{$ingredient->getAmount()} {$ingredient->getName()} \n";
        }
        echo "\nMethod\n";
        echo "\n{$this->method}\n";
    }

}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
// using echo so it looks nicer
// echo $cake->display();
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
 dump($cake->dietary()); // "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
// dump($cake->vegan()); // false