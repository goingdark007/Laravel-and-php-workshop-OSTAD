<?php 

// Creating array
$cars0 = array('volvo', 'toyota', 'bmw');

// another way to create array using []
$cars = ['volvo', 'toyota', 'mitsubishi'];

echo $cars[1],'<br>'; // this works like list in python. Values can be accessed using indexing

// indexed arrays through a loop
foreach ($cars as $x) {
  echo "$x <br>";
}

// associative arrrays
$cars = ["brand"=>"Ford", "model"=>"Mustang", "year"=>1964]; // kind of works like a dictionary in python

echo $cars["model"]; // prints Mustang. Instead accessig through index, it can be accessed like this

$cars["year"] = 2024; // value can be updated too

echo '<br>';

var_dump($cars); // var_dump is the method to print array

echo '<br>';

// through a loop
$car = ["brand"=>"Ford", "model"=>"Mustang", "year"=>1964];

foreach ($car as $x => $y) { // this syntax separates associate from values and prints them

  echo "$x: $y <br>";

}

// multiple line declaration of array
$myCar = [ // using trailing comma

  "brand" => "Ford",

  "model" => "Mustang",

  "year" => 1964
];

echo $myCar["brand"];

// adding multiple items in array
$fruits = ["Apple", "Banana", "Cherry"];

array_push($fruits, "Orange", "Kiwi", "Lemon"); // using array_push() new elements can be added after the last index

echo '<br>';

var_dump($fruits);

$cars += ["Speed" => 160]; // using += operator. This only works in associative array

echo '<br>';

var_dump($cars);

// deleting items from array

$car = ["volvo", "lamborghini", "bmw", "toyota", "mitsubishi","ferrari"];

array_splice($car, 1, 2); // deletes items from index 1 and deletes 2 items. lamborghini and bmw is deleted

echo '<br>';

var_dump($car);

unset($car[1]); // unset() method deletes the item and does not rearrange it meaning index is empty.

echo '<br>';

var_dump($car);

// remove items from an associative array

unset($cars["Speed"]); // deletes speed and its associated value

echo '<br>';

var_dump($cars);

$car = ["volvo", "lamborghini", "bmw", "toyota", "mitsubishi","ferrari"];

array_pop($car); // deletes the last item of the array

echo '<br>';

var_dump($car);

array_shift($car); // deletes the first item of the array

echo '<br>';

var_dump($car);

?>