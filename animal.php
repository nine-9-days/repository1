<?php
class Animal{
    public $cry = "bowbow!";
    
    function bow(){
        echo $this->cry . PHP_EOL;
    }
}

$animal_1 = new Animal();
$animal_1 -> bow();

class Dog extends Animal{
    public $cry = "bowbow!";
}

class Cat extends Animal{
    public $cry = "nya-";
}

$animal_2 = new Dog();
$animal_2 -> bow();

$animal_3 = new Cat();
$animal_3 -> bow();
?>