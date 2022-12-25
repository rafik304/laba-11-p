<?php

abstract class Animal
{
public $food;
public $location;

function __construct($food, $location)
{
$this->food = $food;
$this->location = $location;
}

abstract function make_noise();
abstract function eat();
abstract function sleep();
}
class Cat extends Animal
{
public $color;

function __construct($food, $location, $color)
{
$this->food = $food;
$this->location = $location;
$this->color = $color;
}
function make_noise()
{
echo "<br>"."Мяуу";
}
function eat()
{
echo "<br>"."Кошка ест";
}
function sleep()
{
echo "<br>"."Кошка спит";
}
}
class Dog extends Animal
{
public $color;

function __construct($food, $location, $breed)
{
$this->food = $food;
$this->location = $location;
$this->breed = $breed;
}
function make_noise()
{
echo "<br>"."Гав";
}
function eat()
{
echo "<br>"."Собака ест";
}
function sleep()
{
echo "<br>"."Собака спит";
}
}
class Horse extends Animal
{
public $poroda;

function __construct($food, $location, $view)
{
$this->food = $food;
$this->location = $location;
$this->view = $view;
}
function make_noise()
{
echo "<br>"."Брр";
}
function eat()
{
echo "<br>"."Лошадь ест";
}
function sleep()
{
echo "<br>"."Лошадь спит";
}
}
$class = $_POST["class"];
$food = $_POST["food"];
$location = $_POST["location"];
$sign = $_POST["sign"];
if($class == 'Cat')
{
$object = new Cat($food, $location, $sign);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->color;
}
if($class == 'Dog')
{
$object = new Dog($food, $location, $sign);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->breed;
}
if($class == 'Horse')
{
$object = new Horse($food, $location, $sign);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->view;
}
if($class != 'Cat' && $class != 'Dog' && $class != 'Horse')
{
$object = new Cat($food, $location, $sign);
}

$object->make_noise();
$object->eat();
$object->sleep();

?>